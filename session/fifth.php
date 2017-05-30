<?php
session_start();
if (isset($_SESSION['haruna'])) {
  $_SESSION['sonu'] = "Hello sonu";
  echo $_SESSION['sonu']. "<br>";
}
else {
  header("location: index.php");
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <a href="sixth.php">Sixth page</a>
   </body>
 </html>
