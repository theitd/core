<?php

require_once 'lib/base.php';

if (!\OC_User::isLoggedIn()) {
	header("HTTP/1.0 403 Forbidden");
	\OC_Template::printErrorPage("Permission denied");
}

if ($_SERVER['REQUEST_METHOD'] === "GET") {
	if (isset($_GET['user'])) {
		//SECURITY TODO does this fully eliminate directory traversals?
		$user = stripslashes($_GET['user']);
	} else {
		exit();
	}

	if (isset($_GET['size']) && ((int)$_GET['size'] > 0)) {
		$size = (int)$_GET['size'];
		if ($size > 2048) {
			$size = 2048;
		}
	} else {
		$size = 64;
	}

	$image = \OC_Avatar::get($user, $size);

	if ($image instanceof \OC_Image) {
		$image->show();
	} elseif ($image === false) {
		OC_JSON::success(array('user' => $user, 'size' => $size));
	}
} elseif ($_SERVER['REQUEST_METHOD'] === "POST") {
	$user = OC_User::getUser();

	// Select an image from own files
	if (isset($_POST['path'])) {
		$path = stripslashes($_POST['path']);
		$avatar = OC::$SERVERROOT.'/data/'.$user.'/files'.$path;
	}

	if (isset($_POST['crop'])) {
		$crop = json_decode($_POST['crop'], true);
		if (!isset($path)) {
			// TODO get path to temporarily saved uploaded-avatar
		}
		$image = new \OC_Image($avatar);
		$image->crop($x, $y, $w, $h);
		$avatar = $image->data();
	}

	// Upload a new image
	if (!empty($_FILES)) {
		$files = $_FILES['files'];
		if ($files['error'][0] === 0) {
			$avatar = file_get_contents($files['tmp_name'][0]);
			unlink($files['tmp_name'][0]);
			// TODO make the tmp_name reusable, if the uploaded avatar is not square
		}
	}

	try {
		\OC_Avatar::set($user, $avatar);
		OC_JSON::success();
	} catch (\OC\NotSquareException $e) {
		$tmpname = \OC_Util::generate_random_bytes(10);
		// TODO Save the image temporarily here
		// TODO add a cronjob that cleans up stale tmpimages
		OC_JSON::error(array("data" => array("message" => "notsquare", "tmpname" => $tmpname) ));
	} catch (\Exception $e) {
		OC_JSON::error(array("data" => array("message" => $e->getMessage()) ));
	}
} elseif ($_SERVER['REQUEST_METHOD'] === "DELETE") {
	$user = OC_User::getUser();

	try {
		\OC_Avatar::remove($user);
		OC_JSON::success();
	} catch (\Exception $e) {
		OC_JSON::error(array("data" => array ("message" => $e->getMessage()) ));
	}
}