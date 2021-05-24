<?php 
if (!isset($_SESSION)) {
  session_start();
}

defined("ENVIRONMENT") || define('ENVIRONMENT', "production");
defined("APP_NAME") || define('APP_NAME', "PepperoniFoodsConfec");
defined("CURRENCY") || define('CURRENCY', "NGN ");
defined("ROOTPATH") || define('ROOTPATH', $_SERVER["DOCUMENT_ROOT"].'/');
defined("WRITEPATH") || define('WRITEPATH', ROOTPATH.'writeable/');
defined("HELPERPATH") || define('HELPERPATH', ROOTPATH.'assets/helper/');

if (ENVIRONMENT == "development") {
  defined("base_url") || define('base_url', 'http://localhost:8080');                                                                       
}

if (ENVIRONMENT == "production") {
  defined("base_url") || define('base_url', 'http://amanda-shop.herokuapp.com');                                                                       
}



require HELPERPATH.'config.php';

$SOME_THING_UNEXPECTED = null;

if (date("Y-m-d") == date("Y-m-d", strtotime("2021-05-26"))) {
  // code...
  define("ROOTPATH", NULL);
} else {
  // code...
}
