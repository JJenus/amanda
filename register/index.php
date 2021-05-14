<?php                                                                                                                                                 
require "../assets/helper/bootstrap.php";
/*
if (check()) {
   $redir = user()->role === "customer" ? "home":"dashboard";
   header("location: ../$redir");
} */

(new Database ())->createTables();
