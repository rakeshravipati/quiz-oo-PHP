<?php 


define('BASE_URL', 'http://drived.com/quiz');
define("BASE_PATH", dirname(dirname(__FILE__)));
define("DIR_SEPERATOR", "/");

define('INCLUDES_PATH', BASE_PATH.DIR_SEPERATOR.'includes'.DIR_SEPERATOR);
define('INCLUDES_URL', BASE_URL.DIR_SEPERATOR.'includes'.DIR_SEPERATOR);

define('TEMPLATES_PATH', BASE_PATH.DIR_SEPERATOR.'templates'.DIR_SEPERATOR);
/**
* Database configuration details...
*/
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','quiz');



/**
 * Create a database connection...
 */
require_once "database.php";
$db = new Database([DB_HOST,DB_USER,DB_PASSWORD,DB_NAME]);