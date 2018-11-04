<?php
// Root domain (can include folders, without trailing '/'):
// http://localhost
// https://example.com
// https://www.sub.example.com/folder
define('URL_ROOT', 'http://localhost');

// Site Name
define('SITE_NAME', 'VOLT');

// DB Config
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'MyLittleDatabase');

// App Root
define('APP_ROOT', dirname(dirname(__FILE__)));

// VOLT Version
define('VOLT_VERSION', '1.0');
