<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $a = array('id' => "1","name" => "Yoshiki",'city' => "Kagoshima","country" => "Japan");
      $b=  array('id' => "2","name" => "Sou",'city' => "Okayama","country" => "Japan");
      $c=  array('id' => "7","name" => "Sonu",'city' => "Hisar","country" => "India");
      $d=  array('id' => "1","name" => "Yoshiki",'city' => "Kagoshima","country" => "Japan");
     ?>
     <table>
       <tr>
         <th>ID</th><th>NAME</th><th>CITY</th><th>COUNTRY</th>
       </tr>
       <?php
          foreach ($a as $key => $value) {
            echo "<tr><td>".$a[$key]."</td>";
            echo "<td>".$b[$key]."</td>";
            echo "<td>".$c[$key]."</td>";
            echo "<td>".$d[$key]."</td></tr>";
         }
         ?>
     </table>
  </body>
</html>
