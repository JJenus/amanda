<?php 
if (!isset($_SESSION)) {
  session_start();
}
defined("APP_NAME") || define('APP_NAME', "Amanda's");
defined("ROOTPATH") || define('ROOTPATH', $_SERVER["DOCUMENT_ROOT"].'/');
defined("WRITEPATH") || define('WRITEPATH', ROOTPATH.'writeable/');
defined("HELPERPATH") || define('HELPERPATH', ROOTPATH.'assets/helper/');
defined("base_url") || define('base_url', 'http://amanda-shop.herokuapp.com');                                                                          



require HELPERPATH.'config.php';

