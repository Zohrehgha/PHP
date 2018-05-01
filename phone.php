<?php
class cellphone {
	public $ID;
	public $make;
	public $model;
	public $builtDate;
	public $soldDate;
   
    public function cellphone()
    {
    	$this -> ID = '10';
    	$this -> make = 'panasonic';
    	$this -> model = 'w23';
    	$this -> builtDate = '';
      $this -> soldDate = '';
    }  

	public function tellinformation() 
	{
        echo 'ID:    ' .$this -> ID .'<br/>';
        echo 'make:  ' .$this -> make .'<br/>';
        echo 'model: ' .$this -> model  .'<br/>';
        echo 'builtDate' .$this -> builtDate .'<br/>';
        echo 'soldDate' .$this -> soldDate .'<br/>';

		}
} 

$cellphone1 = new cellphone();
$cellphone1 -> tellinformation();



?>