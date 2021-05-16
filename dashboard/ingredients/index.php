<?php 
require "../../assets/helper/bootstrap.php";

$main = "./ingredients.php";
$page= "ingredients";

$ingredients = (new Database ())->getIngredients();


include HELPERPATH.'temp/layout.php';
