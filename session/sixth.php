<?php
session_start();
if (isset($_SESSION['sonu'])) {
  $_SESSION['raj'] = "Hello Raj";
  echo $_SESSION['raj']. "<br>";
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
     <a href="index.php">Top page</a>
   </body>
 </html>
