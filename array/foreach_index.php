<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $a =
      array(
        array('id' => "1","name" => "Yoshiki",'city' => "Kagoshima","country" => "Japan"),
        array('id' => "2","name" => "Sou",'city' => "Okayama","country" => "Japan"),
        array('id' => "7","name" => "Sonu",'city' => "Hisar","country" => "India"),
        array('id' => "1","name" => "Yoshiki",'city' => "Kagoshima","country" => "Japan"),

      );
       ?>
     <table border="1">
       <tr>
         <th>ID</th><th>NAME</th><th>CITY</th><th>COUNTRY</th>
       </tr>
         <?php
            foreach ($a as $key =>$value) {
              echo "<tr><td>".$value['id']."</td>";
              echo "<td>".$value['name']."</td>";
              echo "<td>".$value['city']."</td>";
              echo "<td>".$value['country']."</td></tr>";
           }
           ?>
     </table>
  </body>
</html>
