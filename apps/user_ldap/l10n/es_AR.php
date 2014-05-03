<?php
$TRANSLATIONS = array(
"Failed to clear the mappings." => "Hubo un error al borrar las asignaciones.",
"Failed to delete the server configuration" => "Fallo al borrar la configuración del servidor",
"The configuration is valid and the connection could be established!" => "La configuración es válida y la conexión pudo ser establecida.",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "La configuración es válida, pero el enlace falló. Por favor, comprobá la configuración del servidor y las credenciales.",
"The configuration is invalid. Please have a look at the logs for further details." => "La configuración es inválida. Por favor, verifique los logs para más detalles.",
"No action specified" => "No se ha especificado una acción",
"No configuration specified" => "No se ha especificado una configuración",
"No data specified" => "No se ha especificado datos",
" Could not set configuration %s" => "No se pudo asignar la configuración %s",
"Deletion failed" => "Error al borrar",
"Take over settings from recent server configuration?" => "Tomar los valores de la anterior configuración de servidor?",
"Keep settings?" => "¿Mantener preferencias?",
"Cannot add server configuration" => "No se pudo añadir la configuración del servidor",
"mappings cleared" => "Asignaciones borradas",
"Success" => "Éxito",
"Error" => "Error",
"Configuration OK" => "Configuración válida",
"Configuration incorrect" => "Configuración incorrecta",
"Configuration incomplete" => "Configuración incompleta",
"Select groups" => "Seleccionar grupos",
"Select object classes" => "Seleccionar las clases de objetos",
"Select attributes" => "Seleccionar atributos",
"Connection test succeeded" => "El este de conexión ha sido completado satisfactoriamente",
"Connection test failed" => "Falló es test de conexión",
"Do you really want to delete the current Server Configuration?" => "¿Realmente desea borrar la configuración actual del servidor?",
"Confirm Deletion" => "Confirmar borrado",
"_%s group found_::_%s groups found_" => array("%s grupo encontrado","%s grupos encontrados"),
"_%s user found_::_%s users found_" => array("%s usuario encontrado","%s usuarios encontrados"),
"Invalid Host" => "Host inválido",
"Could not find the desired feature" => "No se pudo encontrar la característica deseada",
"Save" => "Guardar",
"Test Configuration" => "Probar configuración",
"Help" => "Ayuda",
"Groups meeting these criteria are available in %s:" => "Los grupos que cumplen con estos criterios están disponibles en %s:",
"only those object classes:" => "solo estos objetos de clases:",
"only from those groups:" => "solo provenientes de estos grupos:",
"Edit raw filter instead" => "Editar filtro en bruto",
"Raw LDAP filter" => "Filtro LDAP en bruto",
"The filter specifies which LDAP groups shall have access to the %s instance." => "El filtro especifica qué grupos LDAP deben tener acceso a la instancia %s.",
"groups found" => "grupos encontrados",
"Users login with this attribute:" => "Los usuarios inician sesión con este atributo:",
"LDAP Username:" => "Nombre de usuario LDAP:",
"LDAP Email Address:" => "Correo electrónico LDAP:",
"Other Attributes:" => "Otros atributos:",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action. Example: \"uid=%%uid\"" => "Define el filtro a aplicar cuando se intenta ingresar. %%uid remplaza el nombre de usuario en el proceso de identificación. Por ejemplo: \"uid=%%uid\"",
"Add Server Configuration" => "Añadir Configuración del Servidor",
"Host" => "Servidor",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Podés omitir el protocolo, excepto si SSL es requerido. En ese caso, empezá con ldaps://",
"Port" => "Puerto",
"User DN" => "DN usuario",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "El DN del usuario cliente con el que se hará la asociación, p.ej. uid=agente,dc=ejemplo,dc=com. Para acceso anónimo, dejá DN y contraseña vacíos.",
"Password" => "Contraseña",
"For anonymous access, leave DN and Password empty." => "Para acceso anónimo, dejá DN y contraseña vacíos.",
"One Base DN per line" => "Una DN base por línea",
"You can specify Base DN for users and groups in the Advanced tab" => "Podés especificar el DN base para usuarios y grupos en la pestaña \"Avanzado\"",
"Limit %s access to users meeting these criteria:" => "Limitar acceso %s a los usuarios que cumplen con este criterio:",
"The filter specifies which LDAP users shall have access to the %s instance." => "El filtro especifica cuáles usuarios LDAP deben tener acceso a la instancia %s.",
"users found" => "usuarios encontrados",
"Back" => "Volver",
"Continue" => "Continuar",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behavior. Please ask your system administrator to disable one of them." => "<b>Advertencia:</b> Las apps user_ldap y user_webdavauth son incompatibles. Puede ser que experimentes comportamientos inesperados. Pedile al administrador que desactive uno de ellos.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Atención:</b> El módulo PHP LDAP no está instalado, este elemento no va a funcionar. Por favor, pedile al administrador que lo instale.",
"Connection Settings" => "Configuración de Conección",
"Configuration Active" => "Configuración activa",
"When unchecked, this configuration will be skipped." => "Si no está seleccionada, esta configuración será omitida.",
"Backup (Replica) Host" => "Host para copia de seguridad (réplica)",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Dar un servidor de copia de seguridad opcional. Debe ser una réplica del servidor principal LDAP/AD.",
"Backup (Replica) Port" => "Puerto para copia de seguridad (réplica)",
"Disable Main Server" => "Deshabilitar el Servidor Principal",
"Only connect to the replica server." => "Conectarse únicamente al servidor de réplica.",
"Case insensitive LDAP server (Windows)" => "Servidor de LDAP insensible a mayúsculas/minúsculas (Windows)",
"Turn off SSL certificate validation." => "Desactivar la validación por certificado SSL.",
"Not recommended, use it for testing only! If connection only works with this option, import the LDAP server's SSL certificate in your %s server." => "No es recomendado, ¡Usalo solamente para pruebas! Si la conexión únicamente funciona con esta opción, importá el certificado SSL del servidor LDAP en tu servidor %s.",
"Cache Time-To-Live" => "Tiempo de vida del caché",
"in seconds. A change empties the cache." => "en segundos. Cambiarlo vacía la cache.",
"Directory Settings" => "Configuración de Directorio",
"User Display Name Field" => "Campo de nombre de usuario a mostrar",
"The LDAP attribute to use to generate the user's display name." => "El atributo LDAP a usar para generar el nombre de usuario mostrado.",
"Base User Tree" => "Árbol base de usuario",
"One User Base DN per line" => "Una DN base de usuario por línea",
"User Search Attributes" => "Atributos de la búsqueda de usuario",
"Optional; one attribute per line" => "Opcional; un atributo por linea",
"Group Display Name Field" => "Campo de nombre de grupo a mostrar",
"The LDAP attribute to use to generate the groups's display name." => "El atributo LDAP a usar para generar el nombre de grupo mostrado.",
"Base Group Tree" => "Árbol base de grupo",
"One Group Base DN per line" => "Una DN base de grupo por línea",
"Group Search Attributes" => "Atributos de búsqueda de grupo",
"Group-Member association" => "Asociación Grupo-Miembro",
"Nested Groups" => "Grupos Anidados",
"When switched on, groups that contain groups are supported. (Only works if the group member attribute contains DNs.)" => "Cuando se activa, grupos que contienen grupos son soportados. (Solo funciona si el atributo de miembro del grupo contiene DNs)",
"Paging chunksize" => "Tamaño del fragmento de paginación",
"Special Attributes" => "Atributos Especiales",
"Quota Field" => "Campo de cuota",
"Quota Default" => "Cuota por defecto",
"in bytes" => "en bytes",
"Email Field" => "Campo de e-mail",
"User Home Folder Naming Rule" => "Regla de nombre de los directorios de usuario",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Vacío para el nombre de usuario (por defecto). En otro caso, especificá un atributo LDAP/AD.",
"Internal Username" => "Nombre interno de usuario",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder. It is also a part of remote URLs, for instance for all *DAV services. With this setting, the default behavior can be overridden. To achieve a similar behavior as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users." => "Por defecto, el nombre de usuario interno es creado a partir del atributo UUID. Esto asegura que el nombre de usuario es único y no es necesaria una conversión de caracteres. El nombre de usuario interno sólo se pueden usar estos caracteres: [ a-zA-Z0-9_.@- ]. El resto de caracteres son sustituidos por su correspondiente en ASCII o simplemente omitidos. En caso colisiones, se agregará o incrementará un número. El nombre de usuario interno es usado para identificar un usuario. Es también el nombre predeterminado para el directorio personal del usuario en ownCloud. También es parte de las URLs remotas, por ejemplo, para los servicios *DAV. Con esta opción, se puede cambiar el comportamiento  por defecto. Para conseguir un comportamiento similar a versiones anteriores a ownCloud 5, ingresá el atributo del nombre mostrado en el campo siguiente. Dejalo vacío para el comportamiento por defecto. Los cambios solo tendrán efecto en los nuevos usuarios LDAP mapeados (agregados).",
"Internal Username Attribute:" => "Atributo Nombre Interno de usuario:",
"Override UUID detection" => "Sobrescribir la detección UUID",
"By default, the UUID attribute is automatically detected. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users and groups." => "Por defecto, el atributo UUID es detectado automáticamente. Este atributo es usado para identificar de manera certera usuarios y grupos LDAP. Además, el nombre de usuario interno será creado en base al UUID, si no fue especificado otro comportamiento más arriba. Podés sobrescribir la configuración y pasar un atributo de tu elección. Tenés que asegurarte que el atributo de tu elección sea accesible por los usuarios y grupos y que sea único. Dejalo en blanco para usar el comportamiento por defecto. Los cambios tendrán efecto sólo en los nuevos usuarios y grupos de LDAP mapeados (agregados).",
"UUID Attribute for Users:" => "Atributo UUID para usuarios:",
"UUID Attribute for Groups:" => "Atributo UUID para grupos:",
"Username-LDAP User Mapping" => "Asignación del Nombre de usuario de un usuario LDAP",
"Usernames are used to store and assign (meta) data. In order to precisely identify and recognize users, each LDAP user will have a internal username. This requires a mapping from username to LDAP user. The created username is mapped to the UUID of the LDAP user. Additionally the DN is cached as well to reduce LDAP interaction, but it is not used for identification. If the DN changes, the changes will be found. The internal username is used all over. Clearing the mappings will have leftovers everywhere. Clearing the mappings is not configuration sensitive, it affects all LDAP configurations! Never clear the mappings in a production environment, only in a testing or experimental stage." => "Los usuarios son usados para almacenar y asignar datos (metadatos). Con el fin de identificar de forma precisa y reconocer usuarios, a cada usuario de LDAP se será asignado un nombre de usuario interno. Esto requiere un mapeo entre el nombre de usuario y el usuario del LDAP. El nombre de usuario creado es mapeado respecto al UUID del usuario en el LDAP. De forma adicional, el DN es dejado en caché para reducir la interacción entre el LDAP, pero no es usado para la identificación. Si el DN cambia, los cambios van a ser aplicados. El nombre de usuario interno es usado en todos los lugares. Vaciar los mapeos, deja restos por todas partes. Vaciar los mapeos, no es sensible a configuración, ¡afecta a todas las configuraciones del LDAP! Nunca limpies los mapeos en un entorno de producción, solamente en fase de desarrollo o experimental.",
"Clear Username-LDAP User Mapping" => "Borrar la asignación de los Nombres de usuario de los usuarios LDAP",
"Clear Groupname-LDAP Group Mapping" => "Borrar la asignación de los Nombres de grupo de los grupos de LDAP"
);
$PLURAL_FORMS = "nplurals=2; plural=(n != 1);";
