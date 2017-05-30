<?php
session_start();
if (isset($_SESSION['sou'])) {
  $_SESSION['haruna']="Hello Haruna";
  echo $_SESSION['haruna'];
}
else {
  header("location: third.php");
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <a href="fifth.php">Fifth page</a>
   </body>
 </html>
