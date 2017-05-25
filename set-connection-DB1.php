<!-- from DB setting to select and to show table. -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $email = "abc@gmail.com";
    $pass = "cba";


    $conn = mysqli_connect($severname,$username,$password);
    $db = mysqli_select_db($conn,"basic2");

    // $query = "select * from initial where email='".$email."' and password = '".$pass."'";
    // var_dump($query);
    $query = "select * from initial";
    $run = mysqli_query($conn,$query);
    $row = mysqli_num_rows($run);
    ?>
    <table border="1">
      <tr>
        <th>ID</th><th>NAME</th><th>PHONE</th><th>E-MAIL</th><th>PASSWORD</th><th>CITY</th><th>COUNTRY</th>
      </tr>
      <?php
      if ($row>0) {
        while ($data = mysqli_fetch_array($run))
        {
          echo "<tr><td>".$data["id"]."</td>";
          echo "<td>".$data["name"]."</td>";
          echo "<td>".$data["phone"]."</td>";
          echo "<td>".$data["email"]."</td>";
          echo "<td>".$data["password"]."</td>";
          echo "<td>".$data["city"]."</td>";
          echo "<td>".$data["country"]."</td></tr>";

        }
      }
      else {
        echo "no";
      }

       ?>
    </table>
  </body>
</html>
