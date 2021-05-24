<?php                                                                                                                                                 
require "../assets/helper/bootstrap.php";
/*
if (check()) {
   $redir = user()->role === "customer" ? "home":"dashboard";
   header("location: ../$redir");
} */

# $sales = (new Database ())->getSales();



if (isset($_GET['table'])) {
  // code...
  (new Database ())->emptyTable($_GET['table']);
}

if (isset($_GET['createtables'])) {
  // code...
  (new Database ())->createTables(); 
}


# echo ROOTPATH;
