<?php
//Database params
define('DB_HOST', 'localhost'); //Add your db host
define('DB_USER', 'root'); // Add your DB root
define('DB_PASS', ''); //Add your DB pass
define('DB_NAME', 'immomaroc'); //Add your DB Name
//APPROOT
define('APPROOT', dirname(dirname(__FILE__)));
//URLROOT (Dynamic links)
define('URLROOT', 'http://localhost/red_string_project');

define('BASE_REQUEST_URL',preg_replace('#^/red_string_project/dashboard/#i','',parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)));
define('BASE2_REQUEST_URL',preg_replace('#^/red_string_project/pages/#i','',parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)));

define('SITENAME', 'ImmoMaroc');
