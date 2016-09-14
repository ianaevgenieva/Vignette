<?php

class Driver
{
	protected $name;
	protected $list  = [];
	protected $money;
	protected $station;
	
	public function __construct($name,$money,Station $station)
	{
		$this->name = $name;
		$this->money  =$money;
		$this->station  = $station;
	}
	public function addVehicle(Vehicle $value)
	{
		$this->list[] = $value;
	}
	
	public function getMoney()
	{
		return $this->money;
	}
	
	public function setMoney($value)
	{
		return $this->money = $value;
	}
	
	public function buyVinetka(Station $value,$number,$type)
	{
	   $vehicle = $this->list[$number];
	   if($vehicle  instanceof  Car ) {
	   	 for ($i = 0; $i <count($value->vinetki);$i++) {
	   	 	 if(($value->vinetki[$i]->getColor() === "blue") && ($value->vinetki[$i]->getTerm() === $type)) {
	   	 	 	 $vehicle->setVinetka($value->vinetki[$i]);
	   	 	 	 $value->setKesh( $value->vinetki[$i]->getPrice()+$value->getKesh());
	   	 	 	 $this->setMoney($this->getMoney()- $value->vinetki[$i]->getPrice());
	   	 	 	  $this->list[$number]->setVinetka($value->vinetki[$i]);
	   	 	 	 unset($value->vinetki[$i]);
	   	 	 	 return "susses";
	   	 	 }
	   	 }
	   }
	   if($vehicle  instanceof Truck) {
	   	for ($i = 0; $i <count($value->vinetki);$i++) {
	   		if(($value->vinetki[$i]->getColor() === "black")  && ($value->vinetki[$i]->getTerm() === $type)) {
	 $vehicle->setVinetka($value->vinetki[$i]);
	   	 	 	 $value->setKesh( $value->vinetki[$i]->getPrice()+$value->getKesh());
	   	 	 	 $this->setMoney($this->getMoney()- $value->vinetki[$i]->getPrice());
	   	 	 	 $this->list[$number]->setVinetka($value->vinetki[$i]);
	   	 	 	 unset($value->vinetki[$i]);
	   	 	 	 return "susses";
	   		}
	   	 }
	   }
	   if($vehicle  instanceof Bus) {
	   	for ($i = 0; $i <count($value->vinetki);$i++) {
	   		if(($value->vinetki[$i]->getColor() === "green") &&($value->vinetki[$i]->getTerm() === $type)) {
	   			$vehicle->setVinetka($value->vinetki[$i]);
	   	 	 	 $value->setKesh( $value->vinetki[$i]->getPrice()+$value->getKesh());
	   	 	 	 $this->setMoney($this->getMoney()- $value->vinetki[$i]->getPrice());
	   	 	 	 $this->list[$number]->setVinetka($value->vinetki[$i]);
	   	 	 	 unset($value->vinetki[$i]);
	   	 	 	 return "susses";
	   		}
	   	}
	   }
	
 }
}