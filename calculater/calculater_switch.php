<?php
  $num1 = $_GET["num1"];
  $num2 = $_GET["num2"];
  $opperater = $_GET["opperater"];
  $result;

  switch ($opperater) {
    case '+':
    $result = $num1 + $num2;
    echo "result: ".$result ;
      break;

    case '-':
    $result = $num1 - $num2;
    echo "result: ".$result ;
      break;

    case '*':
    $result = $num1 * $num2;
    echo "result: ".$result ;
      break;

    case '/':
    $result = $num1 / $num2;
    echo "result: ".$result ;
        break;

    case '%':
    $result = $num1 % $num2;
    echo "result: ".$result ;
      break;

    default:
    echo "error";
      break;
  }

  else if ($opperater == "%") {

  }
 ?>
