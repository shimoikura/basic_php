<?php

// 123
// 456
// 789
//------------↓ program ↓--------------

  $a=1;
  for ($i=1; $i <= 3;$i++) {
    for ($j=1; $j <= 3;$j++) {
      echo $a;
      $a++;
    }
    echo "<br>";
  }
//--------------------------------------
  echo "<br><br>";
//--------------------------------------

//*
//**
//***
//------- ----↓ program ↓--------------

  for ($i=1; $i <= 3;$i++) {
    for ($j=1; $j <= $i;$j++) {
      echo "*";
    }
    echo "<br>";
  }
//--------------------------------------
echo "<br><br>";
//--------------------------------------

// *****1
// ****12
// ***123
// **1234
// *12345
//--------↓ program ↓--------------

for ($i=1; $i <= 5 ; $i++) {
  for ($j=5; $j >= $i ; $j--) {
    echo "*";
  }
  for ($k=1; $k <= $i ; $k++) {
    echo $k;
  }
  echo "<br>";
}
 ?>