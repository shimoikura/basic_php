<?php
session_start();
if (isset($_SESSION['hello'])) {
  $yoshiki = "Hello Yoshiki!";
  $_SESSION['yoshiki'] = $yoshiki;
  echo $_SESSION['yoshiki']. "<br>";
}
else {
  header("location:index.php");
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <a href="third.php">Third page</a>
   </body>
 </html>
