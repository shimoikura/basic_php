<?php
// Type1: NO return with NO Argument -----------------
  // function test(){
  //   echo "misao is good institute.";
  // }
  // test();
// --------------------------------------------------

// Type2: NO return with Argument------------------
  // function add($a,$b){
  //   $add = $a + $b;
  //   echo $add. "<br>";
  // }
  // function sub($a,$b)
  // {
  //   $sub = $a - $b;
  //   echo $sub. "<br>";
  // }
  // function mul($a,$b){
  //   $mul = $a * $b;
  //   echo $mul. "<br>";
  // }
  // function div($a,$b){
  //   $div = $a / $b;
  //   echo $div. "<br>";
  // }
  // add(1,2);
  // sub(1,2);
  // mul(1,2);
  // div(1,2);

// ------------------------------------------------------
// Type3: Return with NO Argument------------------
  // function add(){
  //   $a = 10;
  //   $b = 20;
  //   $c = $a + $b;
  //   return $c;
  // }
  // function sub()
  // {
  //   $a = 10;
  //   $b = 20;
  //   $d = $a - $b;
  //   return $d;
  // }
  // $add = add();
  // $sub = sub();
  //
  // echo $add."<br>";
  // echo $sub."<br>";
// -------------------------------------------------------
// Type4: Return with Argument------------------
  // function add($a,$b){
  //   $c = $a + $b;
  //   return $c;
  // }
  // function sub($a,$b)
  // {
  //   $d = $a - $b;
  //   return $d;
  // }
  // $add = add(10,20);
  // $sub = sub(10,20);
  //
  // echo $add."<br>";
  // echo $sub."<br>";
//----------------------------------------------------------
// PRACTICE  -----------------------------------------------
function add($a,$b){
  $c = $a + $b;
  return $c;
}
function sub($a,$b)
{
  $c = $a - $b;
  return $c;
}
function mul($a,$b){
  $c = $a / $b;
  return $c;
}

function div($a,$b){
  $c = $a * $b;
  return $c;
}
$add = add(10,20);
$sub = sub(10,20);
$mul = mul($add,$sub);
$div = div($add,$sub);

echo $add."<br>";
echo $sub."<br>";
echo $mul."<br>";
echo $div."<br>";

 ?>
