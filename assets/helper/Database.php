<?php

class Database{
  private $db_name = "shop";
  private $user;
  private $password;
  private $dsn; // mysql 
  private $sql3; // sqlite
  private $connection;
                                                                                         
  public function __construct(){
   #$this->dsn="mysql:host=localhost;dbname=$database"; // mysql 
   $this->sql3 ="sqlite:".WRITEPATH. $this->db_name.".sqlite" ; // sqlite 
   $this->connect();
   
  }
  
  public function saveFile($name){
    $target_dir = base_url."/products/";
    $target_file = $target_dir . basename($_FILES[$name]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    
    // Check if image file is a actual image or fake image
    
        if ($target_file == base_url."/products/") {
            $msg = "cannot be empty";
            $uploadOk = 0;
        } // Check if file already exists
        else if (file_exists($target_file)) {
            $msg = "Sorry, file already exists.";
            $uploadOk = 0;
        } // Check file size
        else if ($_FILES["fileToUpload"]["size"] > 5000000) {
            $msg = "Sorry, your file is too large.";
            $uploadOk = 0;
        } // Check if $uploadOk is set to 0 by an error
        else if ($uploadOk == 0) {
            $msg = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $msg = "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            }
        }
        
    if (!$uploadOk) {
      return [
        "status" => false, 
        "report" => $msg
      ];
    }
    
    return [
        "status" => true, 
        "report" => $msg, 
        "file" => $target_file
    ];
  }
  
  public function saveProduct(){
    $img_upload = $this->saveFile("image");
    
    if ($img_upload['status']) {
      $img = $img_upload['file'];
    }else{
      return $img_upload['report'];
    } 
    
    $name = $_POST['name'];
    $cat = $_POST["category"];
    $cost = $_POST["cost"];
    $qty = $_POST["quantity"];
    if ($img) {
      try {
        $sql = "INSERT INTO products(created_by, name, category, cost, quantity, image, created_at, updated_at) VALUES(?,?,?,?,?, date('now'), date('now') )";
        $pstmt = $this->connection->prepare($sql);
        $rows = $pstmt->execute([
         user()->id, $name, $cat, $cost, $qty, $img
        ]);
        
        if($rows){
          return true;
        }
      } catch(PDOException $e) {
        return $e->getMessage();//Remove or change message in production code
      }
    }else return "file upload failed";
  }
  
  public function getIngredients(){
    try {
      $sql = "SELECT * FROM ingredients";
      $res = $this->connection->query($sql);
      $arr = [];
      
      foreach ($res as $row){
        $arr[] = [
          "id" => $row['id'], 
          "name" => $row['name'], 
          "quantity" => $row['quantity'], 
          "creator" => $row['created_by']
        ];
      } 
      
      return $arr;
    } catch (PDOException $err) {
      exit($err);
    }
  }
  
  public function saveIngredient(){
    
    $name = $_POST["ingredient"];
    $qty = $_POST["rawmat-qty"];
    
    try {
        $sql = "INSERT INTO ingredients(created_by, name, quantity, created_at, updated_at) VALUES(?,?,?, date('now'), date('now') )";
        $pstmt = $this->connection->prepare($sql);
        $rows = $pstmt->execute([
         user()->id, $name, $qty
        ]);
        
        if($rows){
          return true;
        }
      } catch(PDOException $e) {
        return $e->getMessage();//Remove or change message in production code
      }
  } 
  
  public function updateIngredient(){
    $name = $_POST["ingredient"];
    $qty = $_POST["qty"];
    $id = $_POST["id"];
    
    try {
        $sql = "UPDATE ingredients SET name=?, quantity=?, updated_at = date('now') WHERE id=?";
        $pstmt = $this->connection->prepare($sql);
        $rows = $pstmt->execute([
          $name, $qty, $id 
        ]);
        
        if($rows){
          return true;
        }
      } catch(PDOException $e) {
        return $e->getMessage();//Remove or change message in production code
      }
  } 
  
  public function getStaffs(){
    $sql = "SELECT * FROM users where role != 'customer' AND role != 'admin'";
    $result = $this->connection->query($sql);
    $staffs = [];
    foreach ($result as $row) {
      $staffs[] = [
        "id" => $row['id'], 
        "name" => $row['fullname'], 
        "email" => $row['email'], 
        "role" => $row['role'],
        "created_at" => $row['created_at'],
      ];
    }
    return $staffs ;
  }
  
  public function login(){
    $email = $_POST['email'] ;
    $password = $_POST['password'];
    $sql='SELECT * FROM users WHERE email=?';
    
    try {
      $pstmt = $this->connection->prepare($sql);
      $pstmt->execute([$email]);
      $user = $pstmt->fetch();
      
      if(!empty($user)){
        $hash = $user['password_hash'];
        if (!password_verify($password, $hash)) {
          return "invalidPassword"; // incorrect password 
        }
        
        return $user;
      }else{
        return "invalidUser";
      }
    } catch(PDOException $e) {
      return $e->getMessage();//Remove or change message in production code
    }
    
  }
  
  public function register(){
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $fullname = $_POST['fullname'];
    $role = "customer";
    if (isset($_POST['role'])) {
      $role = $_POST['role'];
    }
    
    if($res = $this->isRegisteredEmail($email) === true){
      return "invalidUser"; //"User already exists"
    }else{
      try {
        $sql = "INSERT INTO users(email, fullname, password_hash, role, created_at, updated_at) VALUES(?,?,?,?, date('now'), date('now') )";
        $pstmt = $this->connection->prepare($sql);
        $rows = $pstmt->execute([
          $email, $fullname, $password, $role
        ]);
        
        if($rows){
          return true;
        }
      } catch(PDOException $e) {
        return $e->getMessage();//Remove or change message in production code
      }
    }
  } 
                                                                                                                                 
  public function isRegisteredEmail($email){
    $sql='SELECT * FROM users WHERE email=?';
    
    try {
      $pstmt = $this->connection->prepare($sql);
      $pstmt->execute([$email]);
      $user = $pstmt->fetch();
      
      if(!empty($user)){
        return true;
      }
      return false;
    } catch (PDOException $e) {
      return $e->getMessage();//Remove or change message in production code();
    }
  }
  
  public function connect(){
    if(!$this->connection){
      $this->connection = new PDO($this->sql3) or exit("Connection error");
      $this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling
    } 
    return $this->connection;
  }
  
  public function create_db($name){
    try {
      $database = new SQLite3(WRITEPATH."$name.sqlite");
      $this->dbname = $name;
      return $name;
    } catch (Exception $err) {
      echo $err->getMessage();
      exit();
    }
  }
  
  public function createTables(){
    try {
         if(!$this->connection){
           $this->connect();
         }
         
         $sql ="
          DROP TABLE IF EXISTS [users];
          DROP TABLE IF EXISTS [products];
          DROP TABLE IF EXISTS [orders];
          DROP TABLE IF EXISTS [invoices];
          DROP TABLE IF EXISTS [ingredients];
          
          CREATE TABLE [users] (
          [id] INTEGER PRIMARY KEY AUTOINCREMENT,
          [fullname] VARCHAR (255) NOT NULL,
          [email] VARCHAR (255) NOT NULL UNIQUE,
          [password_hash] VARCHAR (255) NOT NULL,
          [reset_hash] VARCHAR (255) NULL,
          [reset_at] VARCHAR (255) NULL,
          [role] VARCHAR (30) NOT NULL,
          [created_at] DATETIME NOT NULL,
          [updated_at] DATETIME  NOT NULL,
          [deleted_at] DATETIME);
          
          CREATE TABLE [products] (
          [id] INTEGER PRIMARY KEY AUTOINCREMENT,
          [created_by] INTEGER NOT NULL,
          [name] VARCHAR (63) NOT NULL UNIQUE,
          [category] VARCHAR (63) NOT NULL,
          [image] TEXT NOT NULL,
          [cost] VARCHAR (63) NOT NULL,
          [quantity] INTEGER NOT NULL,
          [created_at] DATETIME NOT NULL,
          [updated_at] DATETIME  NOT NULL,
          [deleted_at] DATETIME,
          FOREIGN KEY([created_by]) REFERENCES [users]([id]) ON DELETE NO ACTION ON UPDATE NO ACTION);
          
          CREATE TABLE [orders] (
          [id] INTEGER PRIMARY KEY AUTOINCREMENT,
          [order_id] VARCHAR NOT NULL,
          [user_id] INTEGER NOT NULL,
          [product_id] INTEGER NOT NULL,
          [quantity] INTEGER NOT NULL,
          [total_cost] VARCHAR (63) NOT NULL,
          [status] VARCHAR (63) NOT NULL,
          [created_at] DATETIME NOT NULL,
          [updated_at] DATETIME  NOT NULL,
          [deleted_at] DATETIME,
          FOREIGN KEY([user_id]) REFERENCES [users]([id]) ON DELETE NO ACTION ON UPDATE NO ACTION);
          
          CREATE TABLE [invoices] (
          [id] INTEGER PRIMARY KEY AUTOINCREMENT,
          [user_id] INTEGER NOT NULL,
          [transaction_ref] VARCHAR (255) NOT NULL UNIQUE,
          [amount] VARCHAR (255) NOT NULL UNIQUE,
          [created_at] DATETIME NOT NULL,
          [order_id] VARCHAR NOT NULL UNIQUE,
          [updated_at] DATETIME  NOT NULL,
          [deleted_at] DATETIME,
          FOREIGN KEY([user_id]) REFERENCES [users]([id]) ON DELETE NO ACTION ON UPDATE NO ACTION);
          
          CREATE TABLE [ingredients] (
          [id] INTEGER PRIMARY KEY AUTOINCREMENT,
          [created_by] INT (11) NOT NULL,
          [name] VARCHAR (30) NOT NULL,
          [quantity] INT (11) NOT NULL,
          [created_at] DATETIME NOT NULL,
          [updated_at] DATETIME NOT NULL,
          FOREIGN KEY([created_by]) REFERENCES [users]([id]));

         " ;
         
         $this->connection->exec($sql);
         
         echo "Tables generated successfully";
    } catch(PDOException $e) {
        echo $e->getMessage();//Remove or change message in production code
        exit();
    }
    
  }
  
}










