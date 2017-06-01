<?php
if (isset($_POST["submit"]) && $_POST["submit"] == "GO!!") {
  $add1 = $_POST["add1"];
  $add2 = $_POST["add2"];
  $sub1 = $_POST["sub1"];
  $sub2 = $_POST["sub2"];
  $mul1 = $_POST["mul1"];
  $mul2 = $_POST["mul2"];
  $div1 = $_POST["div1"];
  $div2 = $_POST["div2"];

  class Calculater{
    public $result;
    public function add($a,$b)
    {
      $this->result = $a + $b;
      return $this->result;
    }
    public function sub($a,$b)
    {
      $this->result = $a - $b;
      return $this->result;
    }
    public function mul($a,$b)
    {
      $this->result = $a * $b;
      return $this->result;
    }
    public function div($a,$b)
    {
      $this->result = $a / $b;
      return $this->result;
    }
  }
  $answer = new Calculater();
  $add = $answer->add($add1,$add2);
  $sub = $answer->sub($sub1,$sub2);
  $mul = $answer->mul($mul1,$mul2);
  $div = $answer->div($div1,$div2);
}

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="task2.php" method="post">
      <table>
        <tr>
          <td><input type="text" name="add1" value="" placeholder="First num"></td>
          <td> + </td>
          <td><input type="text" name="add2" value="" placeholder="Second num "></td>
          <td> = </td>
          <td><?php echo $add; ?></td>
        </tr>
        <tr>
          <td><input type="text" name="sub1" value="" placeholder="First num"></td>
          <td> － </td>
          <td><input type="text" name="sub2" value="" placeholder="Second num "></td>
          <td> = </td>
          <td><?php echo $sub; ?></td>
        </tr>
        <tr>
          <td><input type="text" name="mul1" value="" placeholder="First num"></td>
          <td> × </td>
          <td><input type="text" name="mul2" value="" placeholder="Second num "></td>
          <td> = </td>
          <td><?php echo $mul; ?></td>
        </tr>
        <tr>
          <td><input type="text" name="div1" value="" placeholder="First num"></td>
          <td> ÷ </td>
          <td><input type="text" name="div2" value="" placeholder="Second num "></td>
          <td> = </td>
          <td><?php echo $div; ?></td>
        </tr>

        <tr>
          <td colspan="2"><input type="submit" name="submit" value="GO!!"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
