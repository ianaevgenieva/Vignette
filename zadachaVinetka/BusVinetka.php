<?php

class BusVinetka extends Vinetka
{
public function __construct($color, $term, $date,$price)
	{
		parent::__construct($color, $term, $date);
		$this->price = $price;
    }
  
}