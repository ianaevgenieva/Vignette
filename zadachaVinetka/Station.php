<?php

class Station
{
	public static $instance ;
     public $vinetki = [];
	private $name;
	private $kesh;
	private function __construct($name,$kesh)
	{   
		$this->name = $name;
		$this->kesh = $kesh;
	}
	private function __clone()
	{}
	
	
    private function generateVinetki()
    { 
    $array = [new CarVinetka(Vinetka::CAR_BLUE, "D", null,5),
    	 	 new CarVinetka(Vinetka::CAR_BLUE, "M", null,350),
    	 	new CarVinetka(Vinetka::CAR_BLUE, "Y", null,2100),
    		new BusVinetka(Vinetka::BUS_GREEN,"D",null,9),
    		new BusVinetka(Vinetka::BUS_GREEN, "M", null,630),
    		new BusVinetka(Vinetka::BUS_GREEN, "y", null,3780),
    		new TruckVinetka(Vinetka::TRUCK_BLACK,"D" , null,7),
    		new TruckVinetka(Vinetka::TRUCK_BLACK, "M", null,490),
    		new TruckVinetka(Vinetka::TRUCK_BLACK,"Y",null,2940)];
    		for ($i = 0;$i <9; $i++) {
    			$this->vinetki[] = $array[rand(0,8)];
    		} 
            for ($i = 0; $i <count($this->vinetki);$i++) {
            	echo "color:".$this->vinetki[$i]->getColor()." price:".$this->vinetki[$i]->getPrice().PHP_EOL;
            }
    }
 
    
    public function getInstance($name,$kesh)
    {
    	if (self::$instance === null) {
    		 self::$instance = new Station($name,$kesh);
    		 echo self::$instance->getName(). "with kesh:" .self::$instance->getKesh().PHP_EOL;
    		 self::$instance->generateVinetki();
    		 
    		
    		 
    	}
    	return self::$instance;
    	self::$instance->generateVinetki();
    }
    	
 public  function getName()
  {
     return $this->name;
  }
  
  public function getKesh()
  {
  	return $this->kesh;
  }
  
  public function setKesh($value)
  {
  	$this->kesh = $value;
  }
  
  public function getVinetki()
  {
  	return $this->vinetki;
  }
	
}