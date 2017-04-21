<?php

class Car
{
  private  $ps;

  public function __construct($ps)
  {
    $this->ps = $ps;
  }

  public function drive($location)
  {
    var_dump("Ein Auto faehrt mit {$this->ps} PS in {$location}");
  }


}

$wv = new Car(100);
$wv->drive("Berlin");

$wbm = new Car(200);
$wbm->drive("Duisburg");

 ?>
