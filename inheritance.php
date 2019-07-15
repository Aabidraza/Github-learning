<?php
//*******inheritence********/
//inherit one class to another class

class Abbas{
	var $Address = 'Jafrabad';
	var $City = 'Jalalpur';
	function AbbasName($FirstName,$LastName){
		echo $FirstName.' '.$this->Address.' '.$this->City.'<br />'; 
	}

}

class Abid extends Abbas{
	function AbidName($FirstName,$LastName){
		echo $FirstName.' '.$this->Address.' '.$this->City;
	}
}

$obj1 = new Abbas();
$obj2 = new Abid();

$obj1->AbbasName('Gazanfar','Abbas');
$obj2->AbidName('Abid','Raza');

?>
