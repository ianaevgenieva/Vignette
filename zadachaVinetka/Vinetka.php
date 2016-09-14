<?php

abstract class Vinetka
{
	const CAR_BLUE= "blue";
	const BUS_GREEN = "green";
	const TRUCK_BLACK = "black";
	protected $date;
	protected $color;
	protected $term;
	protected $price;
	
	
	public function __construct($color,$term,$date)
	{
		$this->color = $color;
		$this->term = $term;
		$this->date = $date;
	}
	
	public function getColor()
	{
		return $this->color;
	}
	
	public function getTerm()
	{
		return $this->term;
	}

	public function getPrice()
	{
		return $this->price;
	}

	
}