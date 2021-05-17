<?php 
require "../assets/helper/bootstrap.php";

$main = "./home.php";
$page = "home";

$drinks = (new Database())->getCategory('drinks');       

$pastries = (new Database())->getCategory('pastries');       

include HELPERPATH.'temp/layout.php';
