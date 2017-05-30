<?php
session_start();
$hello = "Hello!!";
$_SESSION['hello'] = $hello;

// How to use session valiable
echo $_SESSION['hello']. "<br>";

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <a href="second.php">second page</a>
   </body>
 </html>
