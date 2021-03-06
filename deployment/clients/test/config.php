<?php
ini_set('error_log', 'data/icehrm.log');

define('CLIENT_NAME', 'testing');
define('APP_BASE_PATH', '/vagrant/');
define('CLIENT_BASE_PATH', '/vagrant/deployment/clients/test/');
define('BASE_URL','http://app.freeze.test/');
define('CLIENT_BASE_URL','http://clients.freeze.test/test/');

define('APP_DB', 'testing');
define('APP_USERNAME', 'testing');
define('APP_PASSWORD', 'testing');
define('APP_HOST', 'localhost');
define('APP_CON_STR', 'mysqli://'.APP_USERNAME.':'.APP_PASSWORD.'@'.APP_HOST.'/'.APP_DB);

//file upload
define('FILE_TYPES', 'jpg,png,jpeg');
define('MAX_FILE_SIZE_KB', 10 * 1024);
