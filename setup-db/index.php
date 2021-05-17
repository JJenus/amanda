<?php                                                                                                                                                 
require "../assets/helper/bootstrap.php";
/*
if (check()) {
   $redir = user()->role === "customer" ? "home":"dashboard";
   header("location: ../$redir");
} */

# $sales = (new Database ())->getSales();


(new Database ())->createTables();

# echo ROOTPATH;
