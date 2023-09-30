<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

ob_start(); // Output buffering is turned on
// Assign file paths to PHP constants
// __FILE__ returns the current path to this file
// dirname() returns the path to the parent directory
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');
define("VENDOR_PATH", dirname(PRIVATE_PATH) . '/vendor');

// Assign the root URL ot a PHP constant
// * Do not need to include the domain
// * Use same document root as webserver
// * Can set a hardcoded value:
// define("WWW_ROOT", 'http://172.23.207.28/Sites/globe_bank/public');
// define("WWW_ROOT", '');
// * Can dynamically find everything in URL up to "/public
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

// require_once('functions.php');
// require_once('database.php');
// require_once('query_functions.php');
// require_once('validation_functions.php');

// $db = db_connect();
$errors = [];

?>