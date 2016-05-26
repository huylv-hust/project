<?php
// HTTP
define('HTTP_SERVER', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/project/admin/');
define('HTTP_WEBSITE', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/project/');

// HTTPS
define('HTTPS_SERVER', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/project/admin/');
define('HTTPS_WEBSITE', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/project/');

// DIR
define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
define('DIR_APPLICATION', DOCUMENT_ROOT.'project/admin/');
define('DIR_SYSTEM', DOCUMENT_ROOT.'project/system/');
define('DIR_LANGUAGE', DOCUMENT_ROOT.'project/admin/language/');
define('DIR_TEMPLATE', DOCUMENT_ROOT.'project/admin/view/template/');
define('DIR_CONFIG', DOCUMENT_ROOT.'project/system/config/');
define('DIR_IMAGE', DOCUMENT_ROOT.'project/image/');
define('DIR_WEBSITE', DOCUMENT_ROOT.'project/website/');
// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ec');
define('DB_PORT', '3306');
define('DB_PREFIX', '');
