<?php 
if (!isset($_POST["cart"])) {
  die("ACCESS DENIED");
}
require "../assets/helper/bootstrap.php";

if(!check()){
  reply([
    "status" => false, 
    "report" => "Please login to continue."
  ]);
}
/*else {
  reply([
    "status" => false, 
    "report" => json_decode($_POST["cart"], true)
  ]);
} */

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

