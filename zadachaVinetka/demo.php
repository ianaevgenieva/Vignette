<?php

require_once 'autoload.php';



//$v1 = Station::getInstance();
$v  = Station ::getInstance("Benzinostanciq-OMV ",4444);
$v1 = new CarVinetka("blue", "Y", "11.05",5);
$car  = new Car("pejo",$v1, "1997");

$d1 = new Driver("pencho", 100000, $v);
$d1->addVehicle($car);
echo ($d1->buyVinetka($v,0,"D"));
 print_r($v ->getVinetki());
 var_dump($d1);
 echo $d1->getMoney().PHP_EOL;
 echo $v->getKesh().PHP_EOL;