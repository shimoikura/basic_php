<!-- from DB setting to insert and delete. -->
    <?php
      $severname = "localhost";
      $username = "root";
      $password = "";

      $conn = mysqli_connect($severname,$username,$password);
      $db = mysqli_select_db($conn,"basic2");

      $id = 0;
      $name = "Sou";
      $phone = "1133";
      $email = "ccc@gmail.com";
      $password = "hhh";
      $city = "Okayama";
      $country = "Japan";

      // $query = "insert into initial (id,name,phone,email,password,city,country)values('$id','$name','$phone','$email','$password','$city','$country')";
      $query = "delete from initial where id = $id";
      $run = mysqli_query($conn,$query);

        if($run){
          echo "success";
        }
        else {
          echo "error.";
        }
      mysqli_close($conn);
     ?>
