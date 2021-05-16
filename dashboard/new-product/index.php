<?php 
require "../../assets/helper/bootstrap.php";

$main = "./new_product.php";
$page= "new_product";

$categories = ["pastries", "drinks"];
sort($categories);

include HELPERPATH.'temp/layout.php';
