<?php 
require "../assets/helper/bootstrap.php";

if(isset($_COOKIE["pay"])){
  $variable = json_decode($_COOKIE["pay"], true);
  foreach ($variable as $val) {
    $_POST[$val["name"]] = $val["value"];
  }
  
  setcookie("pay", "", time() - 3600);
}

if (!isset($_POST["cart"])) {
 
  echo reply([
    "status" => false, 
    "report" => "ACCESS DENIED"
  ]);
  exit();
}

if(!check()){
  reply([
    "status" => false, 
    "report" => "Please login to continue."
  ]);
}

$res = (new Database ())->createOrder();

if (isset($res["id"])) {
  reply([
    "status" => "ok", 
    "report" => "Order successful. Order ID: ".$res["id"]
  ]); 
}else{
  reply([
    "status" => false, 
    "report" => $res
  ]);
}

function reply($data){
    header('Content-Type: application/json');
    echo json_encode($data);
    die();
}

