<?php 
require "../../assets/helper/bootstrap.php";

$main = "./dashboard.php";
$page= "dashboard";

$staffs = (new Database ())->getStaffs();

$products = (new Database ())->getProducts();

$sales = (new Database ())->getSales();

$customers = (new Database ())->getCustomers();

include HELPERPATH.'temp/layout.php';
