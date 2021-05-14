<?php                                                                                                                                                 
require "../assets/helper/bootstrap.php";

if (check()) {
   $redir = user()->role === "customer" ? "app":"dashboard";
   header("location: ../$redir");
}

$main = "./login.php";
$page = "auth";

include HELPERPATH.'temp/layout.php';
