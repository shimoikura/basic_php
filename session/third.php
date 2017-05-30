<?php
session_start();
if (isset($_SESSION['yoshiki'])) {
  $_SESSION['sou']="Hello Sou";
  echo $_SESSION['sou'];
}
else {
  header("location: second.php");
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <a href="fourth.php">fourth page</a>
   </body>
 </html>
