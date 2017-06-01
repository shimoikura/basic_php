<?php
class Calculater
{
  public $a = 10;
  public $b = 20;
  public $c = 30;
  public $d = 50;
  public $result;
  public function add()
  {
    $this->result = $this->a + $this->b;
    return $this->result;
  }
  public function sub()
  {
    $this->result = $this->d - $this->b;
    return $this->result;
  }
  public function mul()
  {
    $this->result = $this->b * $this->b;
    return $this->result;
  }
  public function div()
  {
    $this->result = $this->c / $this->a;
    return $this->result;
  }
}
$answer = new Calculater();
echo $answer->add()."<br>";
echo $answer->sub()."<br>";
echo $answer->mul()."<br>";
echo $answer->div()."<br>";
 ?>
