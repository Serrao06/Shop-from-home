 <?php

ob_start();
session_start();
//=========== database connection variables ====================
define('DB_SERVER', "server name"); // database host name eg. localhost or 127.0.0.1
define('DB_USER', "user name"); // database user name eg. root
define('DB_DATABASE', "shop_from_home"); //database name
define('DB_PASSWORD', ""); //database user password
define('DB_TYPE', 'mysql'); //database drive eg. mysql, pgsql, mongodb etc




//========== site details described here ========================
define('SITE_TITLE', 'Shop From Home');
define('SITE_TAG_LINE', 'Order products from home by your local vendors');

//contact ifnormation
define('SITE_CONTACT', 'your number');
//email information
define('SITE_EMAIL_INFO', 'your mail id');
//url information
define('BASE_URL', 'http://localhost/cud opertaion/');

// Mailing
define('MAIL_HOST', 'smtp host name');
define('MAIL_ID', 'your mail id');
define('MAIL_PASSWORD', 'smtp password');

// included main class
require_once 'app/Main.php';
require_once 'app/Admin.php';
require_once 'app/Controller.php';

/**
 * @param $class
 */
