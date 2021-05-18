<?php

class Database{
  private $db_name = "shop";
  private $user;
  private $pass;
  private $dsn; // mysql 
  private $sql3; // sqlite
  private $connection;
  private $dateNow;
                                                                                         
  public function __construct(){
    if (ENVIRONMENT == "production") {
      $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
      $this->dateNow = "now()";
      $server = $url["host"];
      $this->user = $url["user"];
      $this->pass = $url["pass"];
      $db = substr($url["path"], 1);
      
      $this->dsn = "mysql:host=$server;dbname=$db"; // mysql 
    }
                                                                            
    
                                                                           
    if (ENVIRONMENT == "development") {
      $this->dateNow = "date('now')";
      $this->sql3 ="sqlite:".WRITEPATH. $this->db_name.".sqlite" ; // sqlite 
    }
    
     
    $this->connect();
   
  }
  
  public function getSales(){
    try {
      $sql = "SELECT SUM(quantity) as quantity, SUM(total_cost) as amount, product_id from orders GROUP BY product_id";
      $res = $this->connection->query($sql);
      $arr = [];
      
      foreach ($res as $row){
        $id = $row['product_id'];
        
        $sql = "SELECT name, image, category FROM products WHERE id = '$id'";
        $res = $this->connection->query($sql);
        $rw = $res->fetch();
        $arr[] = [
          "id" => $row["product_id"], 
          "amount" => $row["amount"], 
          "quantity" => $row["quantity"], 
          "image" => $rw["image"], 
          "name" => $rw["name"], 
          "category" => $rw["category"], 
        ];
        
      } 
      
      return $arr;
    } catch (PDOException $err) {
      exit($err);
    }
  } 
  
  public function emptyTable($table){
    try {
        $sql = "DELETE FROM $table";
        $pstmt = $this->connection->query($sql);
        
        if($pstmt){
          echo $table." emptied";
        }
      } catch(PDOException $e) {
        return $e->getMessage();//Remove or change message in production code
      }
  }
  
  public function getInvoices(){
    try {
      $sql = "SELECT * FROM invoices ORDER BY created_at DESC";
      $res = $this->connection->query($sql);
      $arr = [];
      
      foreach ($res as $row){
        $arr[] = [
          "id" => $row['id'], 
          "user_id" => $row['user_id'], 
          "amount" => $row['amount'], 
          "order_id" => $row['order_id'], 
          "transaction_ref" => $row['transaction_ref'], 
          "time" => $row['created_at'], 
        ];
      } 
      
      return $arr;
    } catch (PDOException $err) {
      exit($err);
    }
  } 
  
  public function makePayment(){
    
    $amount = $_POST['total'];
    $order_id = $this->random_str(10);
    $ref = "T";
    
    for ($i = 0; $i < 4; $i++) {
       $ref .= "_". $this->random_str(4);
    }
    
    
      try {
        $sql = "INSERT INTO invoices(user_id, transaction_ref, order_id, amount, created_at, updated_at) VALUES(?,?,?,?, $this->dateNow , $this->dateNow  )";
        $pstmt = $this->connection->prepare($sql);
        $rows = $pstmt->execute([
         user()->id, $ref, $order_id, $amount
        ]);
        
        if($rows){
          return [
            "status" => true, 
            "id" => $order_id
          ];
        }else return "unknown error occurred";
      } catch(PDOException $e) {
        return $e->getMessage();//Remove or change message in production code
      }
    
  }
  
  public function createOrder(){
    $paid = $this->makePayment();
    
    $products = json_decode($_POST['cart'], true) ;
    
    if (isset($paid["id"])) {
      try {
        $sql = "INSERT INTO orders(user_id, order_id, product_id, total_cost, quantity, status, created_at, updated_at) VALUES(?,?,?,?,?,?, $this->dateNow , $this->dateNow  )";
        
        foreach ($products as $product) {
          $cost = $product['qty'] * $product['cost'];
          $pstmt = $this->connection->prepare($sql);
          $rows = $pstmt->execute([
            user()->id, $paid["id"], $product['id'], $cost, $product['qty'], "paid"
          ]); 
        }
        
        
        return [
          "id" => $paid["id"]
        ];
        
      } catch(PDOException $e) {
        return $e->getMessage();//Remove or change message in production code
      }
    }else return $paid;
  }
  
  public function saveFile($name){
    $target_dir = ROOTPATH."/products/";
    
    $imageFileType = pathinfo($_FILES[$name]["name"], PATHINFO_EXTENSION);
    
    $target_file = $target_dir . $this->random_str(20, "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkpmnopqrstuvwxyz").'.'.$imageFileType;
    $uploadOk = 1;
    
    // Check if image file is a actual image or fake image
    
        if ($target_file == base_url."/products/") {
            $msg = "cannot be empty";
            $uploadOk = 0;
        } // Check if file already exists
        else if (file_exists($target_file)) {
            $msg = "Sorry, file already exists.";
            $uploadOk = 0;
        } // Check file size
        else if ($_FILES[$name]["size"] > 10000000) {
            $msg = "Sorry, your file is too large.";
            $uploadOk = 0;
        } // Check if $uploadOk is set to 0 by an error
        else if ($uploadOk == 0) {
            $msg = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
                $msg = "The file " . basename($_FILES[$name]["name"]) . " has been uploaded.";
            }else $msg = "unknown error occurred ";
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
        "file" => base_url."/products/".$_FILES[$name]["name"]
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
        $sql = "INSERT INTO products(created_by, name, category, cost, quantity, image, created_at, updated_at) VALUES(?,?,?,?,?,?, $this->dateNow , $this->dateNow  )";
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
  
  public function getProducts(){
    try {
      $sql = "SELECT * FROM products ORDER BY created_at DESC";
      $res = $this->connection->query($sql);
      $arr = [];
      
      foreach ($res as $row){
        $arr[] = [
          "id" => $row['id'], 
          "name" => $row['name'], 
          "image" => $row['image'], 
          "category" => $row['category'], 
          "cost" => $row['cost'], 
          "time" => $row['created_at'], 
          "quantity" => $row['quantity'], 
          "creator" => $row['created_by']
        ];
      } 
      
      return $arr;
    } catch (PDOException $err) {
      exit($err);
    }
  }
  
  public function getCategory($cat){
    try {
      $sql = "SELECT * FROM products WHERE category='$cat'";
      $res = $this->connection->query($sql);
      $arr = [];
      
      foreach ($res as $row){
        $arr[] = [
          "id" => intval($row['id']), 
          "qty" => 1, 
          "name" => $row['name'], 
          "image" => $row['image'], 
          "category" => $row['category'], 
          "cost" => floatval($row['cost']), 
          "time" => $row['created_at'], 
          "quantity" => $row['quantity'], 
        ];
      } 
      
      return $arr;
    } catch (PDOException $err) {
      exit($err);
    }
  }
  
  public function getIngredients(){
    try {
      $sql = "SELECT * FROM ingredients ORDER BY created_at DESC";
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
        $sql = "INSERT INTO ingredients(created_by, name, quantity, created_at, updated_at) VALUES(?,?,?, $this->dateNow , $this->dateNow  )";
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
        $sql = "UPDATE ingredients SET name=?, quantity=?, updated_at = $this->dateNow  WHERE id=?";
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
    $sql = "SELECT * FROM users where role != 'customer' AND role != 'admin' ORDER BY created_at DESC";
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
  
  public function getCustomers(){
    $sql = "SELECT * FROM users where role = 'customer' ORDER BY created_at DESC";
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
        $sql = "INSERT INTO users(email, fullname, password_hash, role, created_at, updated_at) VALUES(?,?,?,?, $this->dateNow , $this->dateNow  )";
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
  
  public function random_str(
    int $length = 64,
    string $keyspace = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'
  ): string {
      if ($length < 1) {
          throw new \RangeException("Length must be a positive INT");
      }
      $pieces = [];
      $max = mb_strlen($keyspace, '8bit') - 1;
      for ($i = 0; $i < $length; ++$i) {
          $pieces []= $keyspace[random_int(0, $max)];
      }
      return implode('', $pieces);
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
      if (ENVIRONMENT == "development") {
        $this->connection = new PDO($this->sql3) or exit("Connection error");
      }
      
      if (ENVIRONMENT == "production") {
        $this->connection = new PDO($this->dsn, $this->user, $this->pass) or exit("Connection error");
      }
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
         
         $sql = ["
          DROP TABLE IF EXISTS `orders`;
          ", 
          "CREATE TABLE `orders` (
          `id` INT PRIMARY KEY AUTO_INCREMENT,
          `user_id` INT NOT NULL,
          `product_id` INT NOT NULL,
          `order_id` text,
          `total_cost` text,
          `quantity` INT,
          `status` text ,
          `created_at` timestamp,
          `updated_at` timestamp,
          `deleted_at` timestamp);", 
         ] ;
         
         foreach ($sql as $val) {
           $this->connection->exec($val);
         }
         
         echo "Tables generated successfully";
    } catch(PDOException $e) {
        echo $e->getMessage();//Remove or change message in production code
        exit();
    }
    
  }
}






                                                                                                                                            
