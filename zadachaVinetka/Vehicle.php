<?php

abstract class Vehicle 
{
  protected $model;
  protected $vinetka;
  protected $dayMade;
  
  public function __construct($model ,Vinetka $value ,$dayMade)
  {
  	$this->model = $model;
  	$this->vinetka= $value;
  	$this->dayMade = $dayMade;
  }
  
  public function getVinetka()
  {
  	return $this->vinetka;
  }
  
  public function setVinetka(Vinetka $value)
  {
  	return $this->vinetka = $value;
  }
  
}