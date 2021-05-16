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

         " ;
         
         $this->connection->exec($sql);
         
         echo "Tables generated successfully";
    } catch(PDOException $e) {
        echo $e->getMessage();//Remove or change message in production code
        exit();
    }
  }
  
}










