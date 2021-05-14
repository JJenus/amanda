<?php
require HELPERPATH."Database.php";


function base_url(){
  return base_url;
}

function check() {
  if(isset($_COOKIE["user"])){
    if(!function_exists("user")){
      function user(){
        class _user{
          public $name;
          public $id;
          public $email;
          public $role;
          
          
          public function __construct($array){
            $_SESSION["user"] = $array;
            
            $array = json_decode($array, true);
            
            $this->name = $array['fullname'];
            $this->id = $array['id'];
            $this->role = $array['role'];
            $this->email = $array['email'];
          } 
       }
       
       $user = $_SESSION['user'] ?? $_COOKIE["user"];
       return new _user($user);
      }
    } 
    return true;
  }
  
  return false;
} 
