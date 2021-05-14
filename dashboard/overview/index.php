<?php 
require "../../assets/helper/bootstrap.php";

$main = "./dashboard.php";
$page= "dashboard";

$staffs = (new Database ())->getStaffs();



include HELPERPATH.'temp/layout.php';
