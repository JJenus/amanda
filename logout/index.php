<?php 

if (isset($_COOKIE["user"])) {
  setcookie("user", null, time()-3600, '/');
}

header("location: ../login");