<?php 
require "../../assets/helper/bootstrap.php";

$main = "./add_staff.php";
$page= "new_staff";

# $staffs = (new Database ())->getStaffs();

$roles = json_decode(file_get_contents("roles.json"), true) ;
sort($roles) ;                                                                                            
include HELPERPATH.'temp/layout.php';
