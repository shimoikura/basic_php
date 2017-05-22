<?php
  $a = array(7,2,4,9,12,11,15,14,10);
  $num = count($a);

    echo "Origin: ";
  for ($i=0; $i < $num; $i++) {
    echo $a[$i]. " ";
  }
  echo "<br><br>";
  echo "Assending: ";
  sort($a);
  for ($i=0; $i < $num; $i++) {
    echo $a[$i]. " ";
  }
  echo "<br><br>";
  echo "Deassending: ";
  rsort($a);
  for ($i=0; $i < $num; $i++) {
    echo $a[$i]. " ";
  }
  echo "<br><br><br>";
  echo "Reverse: ";

  $a = array(7,2,4,9,12,11,15,14,10);
  $num = count($a);
  $j=$num-1;
  for ($i=0; $i < $num; $i++) {
    $e[$j] = $a[$i];
    $j--;
  }
  for ($i=0; $i < $num ; $i++) {
    echo $e[$i]. " ";
  }
  echo "<br><br><br>";



  $id = array(1,2,3,4,5,6,7,8);
  $name = array("Yoshiki","Sou","Sonu","Taiki","Takeru","Kota","Shinji","Taka");
  $phonenum = array(111,222,333,444,555,666,777,888 );
  $city = array("Kagoshima","Okayama","Hisar","Osaka","Saitama","Tokyo","Kanagawa","Chiba");
  $course = array("php","php","Japanese","English","English","Java","Internship","php");
  $country = array("Japan","Japan","India","Japan","Japan","Japan","Japan","Japan" );

  $num = count($id);
  for ($i=0; $i < $num; $i++) {
    echo $id[$i]. " " .$name[$i]. " " .$phonenum[$i]. " " .$city[$i]. " " .$course[$i]. " " .$country[$i]. "<br>";
  }
 ?>
