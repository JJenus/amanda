<?php
require "../../assets/helper/bootstrap.php";

if (!isset($_POST) || !check()) {
  header('Content-Type: application/json');
  
  if (isset($_POST["ingredient"])) {
    $msg = "Post : You're not logged in" /*$_POST["ingredient"]*/;
  } else if(isset($_GET["ingredient"])) {
    $msg = "Get: You're not logged in" /*$_GET["ingredient"]*/; 
  }else if(!check()){
    $msg = "You're not logged in";
  }
  else{
    $msg = "ACCESS DENIED";
  }
  
  
  echo json_encode([
    "status" => false, 
    "report" => $msg
  ]);
  exit();
}

class Interactions{
  public $db;
  
  function __construct(){
    $this->db = new Database();
  }
  
  public function start(){
    if (isset($_POST['upload_product'])) {
      $this->saveProduct();
    } 
    else if (isset($_POST['upload_ingredient'])) {
      $this->saveIngredient();
    }
    else if (isset($_POST['update_ingredient'])) {
      $this->updateIngredient();
    }
    else {
      exit("ACCESS DENIED");
    }
  } 
  
  # TODO:                                                                                   
  public function saveProduct(){
    $res = $this->db->saveProduct();
    if($res["status"]){
      $this->reply([
        "status" => "ok", 
        "report" => "New Product added successfully",
        "data" => $res["data"]
      ]);
    }else{
      $this->reply([
        "status" => false, 
        "report" => $res["report"]
      ]);
    } 
  } 
  
  public function saveIngredient(){
    $res = $this->db->saveIngredient();
    if($res === true){
      $data = [
        "name" => $_POST["ingredient"], 
        "qty" => $_POST["rawmat-qty"]
      ];
      
      $this->reply([
        "status" => "ok", 
        "report" => "New Ingredient added successfully", 
        "data" => $data
      ]);
    }else{
      $this->reply([
        "status" => false, 
        "report" => $res
      ]);
    } 
  } 
  
  public function updateIngredient(){
    $res = $this->db->updateIngredient();
    if($res === true){
      $data = [
        "name" => $_POST["ingredient"], 
        "qty" => $_POST["qty"], 
        "id" => $_POST["id"]
      ];
      $this->reply([
        "status" => "ok", 
        "report" => "updated successfully", 
        "data" => $data
      ]);
    }else{
      $this->reply([
        "status" => false, 
        "report" => $res
      ]);
    } 
  } 
  
  public function reply($data){
    header('Content-Type: application/json');
    echo json_encode($data);
  }
}

(new Interactions())->start();