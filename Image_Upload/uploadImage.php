<?php
  // DB setting  ------------------------------------------------
  $svname ="localhost";
  $svusername = "root";
  $svpassword = "";
  $conn = mysqli_connect($svname,$svusername,$svpassword);
  $db = mysqli_select_db($conn,"upload_image");
  // -----------------------------------------------------------

  $image = $_FILES['img'];
   print_r($image); //配列の中身確認

// validation  --------------------------------------------------------------------------------------------------
  if (isset($image) && ! empty($image["name"])) {
    // echo "success";
    // initialization------------------------------
    $name = $image["name"];
    $size = $image["size"];
    $type = $image["type"];
    $tmp_name = $image["tmp_name"];
    $type_check = explode(".",$name);
    $type1 = end($type_check);
    $validtype = array('jpeg','jpg','gif','png');
    // -------------------------------------------------

    if (($type == " image/jpeg" || $type == " image/jpg" || $type == "image/gif" || $type == "image/jpeg" || $type == " image/png") || (in_array($type1,$validtype))) {
      // echo "Type is correct.<br>";
      if($size < 1000000){
        // echo "The size is also OK.<br>";
      //Check exist or not ---------------------------------------------------
        if (file_exists('images/'.$name)) {
          $rand = rand(0,99999);  //make random
          //Upload
          $upload = move_uploaded_file($tmp_name,"images/".$rand."_".$name);
          echo "file is uploaded successfuly.<br>";
        }
      // --------------------------------------------------------------------------
        else {
          //Upload
          $upload = move_uploaded_file($tmp_name,"images/".$name);
          if ($upload) {
            echo "file is uploaded successfuly.<br>";
          }
          else{
            echo "sorry. file is not uploaded.";
          }
        }
      }
      else {
        echo "The image size is too large.<br>";
      }
    }
    else {
      echo "Type is wrong.";
    }
  }
  else{
    echo "Please select File.";
  }

  // 成功した場合の処理　insert into DB---------------------------------------------------------------
  if ($upload) {
    $query = "insert into img_info (id,name,type,size)values('','$name','$type','$size')";
    $run = mysqli_query($conn,$query);
    mysqli_close($conn);
  }
  // ---------------------------------------------------------------------------------------------------
 ?>
