<?php
// HTTP
define('HTTP_SERVER', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/project/');

// HTTPS
define('HTTPS_SERVER', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/project/');

// DIR
define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
define('DIR_APPLICATION', DOCUMENT_ROOT.'project/website/');
define('DIR_SYSTEM', DOCUMENT_ROOT.'project/system/');
define('DIR_LANGUAGE', DOCUMENT_ROOT.'project/website/language/');
define('DIR_TEMPLATE', DOCUMENT_ROOT.'project/website/view/');
define('DIR_CONFIG', DOCUMENT_ROOT.'project/system/config/');
define('DIR_IMAGE', DOCUMENT_ROOT.'project/image/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ec');
define('DB_PORT', '3306');
define('DB_PREFIX', '');
