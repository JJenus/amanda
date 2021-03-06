<?php 

if(isset($_COOKIE["login"])){
  $variable = json_decode($_COOKIE["login"], true);
  foreach ($variable as $val) {
    $_POST[$val["name"]] = $val["value"];
  }
  
  setcookie("login", "", time() - 3600);
}

if (!isset($_POST['fullname']) && !isset($_POST['email']) ) {
  header('Content-Type: application/json');
  if (isset($_POST["email"])) {
    $msg = "Post : ". $_POST["email"];
  } else if(isset($_GET["email"])) {
    $msg = "Get : ". $_GET["email"]; 
  }else{
    $msg = "ACCESS DENIED ". json_encode($_POST);
  }
  
  
  echo json_encode([
    "status" => false, 
    "report" => $msg
  ]);
  exit();
}
require "../assets/helper/bootstrap.php";

class Auth{
  private $db;
  
  public function __construct(){
    $this->db = new Database();
    $this->db->connect();
  }
  
  public function start(){
    if (isset($_POST['fullname'])) {
      $this->attemptReg();
    } else {
      $this->attemptLogin();
    }
    exit();
  } 
  
  public function attemptReg(){
    $res = $this->db->register();
    if ($res === true) {
      $this->response = "registration successful";
      if (isset($_POST['role'])) {
        // code...
        $this->reply([
          "status" => "ok", 
          "report" => "Registration successful", 
          "data" => $res
        ]);
      }else {
        $this->attemptLogin(); 
      }
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
  
  public function attemptLogin(){
    $res = $this->db->login();
    if (!isset($res["id"])) {
      $this->reply([
        "status" => false, 
        "report" => $res
      ]);
    }else{
      setcookie(
        "user", 
        json_encode($res), 
        time() + (86400 * 30), 
        "/"
      );
      
      if ($res["role"] === "customer" ) {
       $redir = base_url."/app";
      } else {
        $redir = base_url. "/dashboard";
      }
      
      $redir = $_SESSION["redirect"] ?? $redir; 
      
      $this->reply([
        "status" => "ok", 
        "report" => "login successful", 
        "redirect" => $redir, 
        "data" => $res
      ]);
    } 
  } 
  
  
}

(new Auth())->start() ;
