<?php
// constants are accessible all over the application

if($_SERVER['SERVER_NAME'] == 'localhost') {
    
    // Database credentials
    define('DB_NAME', 'php-mvc');
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    // Root for images and other asset files based in public folder
    define('ROOT', 'http://localhost/garbage/php-mvc/public'); 
}else {

    // Database credentials
    define('DB_NAME', 'php-mvc');
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    define('ROOT', 'https://www.yourdomain.com/public'); 
}

define('APP_NAME', 'My Website');
define('APP_DESC', 'Description of the website');

define('DEBUG', true);

