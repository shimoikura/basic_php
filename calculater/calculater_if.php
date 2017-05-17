<?php
  $num1 = $_GET["num1"];
  $num2 = $_GET["num2"];
  $opperater = $_GET["opperater"];
  $result;

  if ($opperater == "+") {
    $result = $num1 + $num2;
    echo "result: ".$result ;
  }
  else if ($opperater == "-") {
    $result = $num1 - $num2;
    echo "result: ".$result ;
  }
  else if ($opperater == "*") {
    $result = $num1 * $num2;
    echo "result: ".$result ;
  }
  else if ($opperater == "/") {
    $result = $num1 / $num2;
    echo "result: ".$result ;
  }
  else if ($opperater == "%") {
    $result = $num1 % $num2;
    echo "result: ".$result ;
  }
  else {
    echo "error";
  }
 ?>
