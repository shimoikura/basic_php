<?php
// 2
// -4
// 6
// -8
// 10
// -12
// 14
// -16
// 18
// -20

//------- ----↓ program ↓--------------

  $a=1;
  $b=1;
  while ($a <= 10) {
    echo 2 * $a * $b ."<br>";
    $a++;
    $b = $b * -1;
  }

  //--------------------------------------
    echo "<br><br>";
  //--------------------------------------
  //
  // 1
  // 21
  // 321
  // 4321

  //------- ----↓ program ↓--------------

$a=1;
while ($a <= 4) {
  $b=1;
  $c=$a;
  while ($b <= $a ) {
    echo $c;
    $b++;
    $c--;
  }
  $a++;
  echo "<br>";
}


  //--------------------------------------
    echo "<br><br>";
  //--------------------------------------
  //
  // 6
  // 54
  // 321

  //------- ----↓ program ↓--------------

  $a=1;
  $c=7;
  while ($a <= 3) {
    $b=1;
    while ($b <= $a) {
      $c--;
      echo $c;
      $b++;
    }
    $a++;
    echo "<br>";
  }

  //--------------------------------------
    echo "<br><br>";
  //--------------------------------------
 ?>