<?php

//Encapsulation = Binding of related methode and properties. 
class Abbas{
	var $a = 10;
	var $b= 2;
	function add (){
		echo "Add =>".$c= $this->a + $this->b .'<br />';
	}
	function sub (){
		echo "Sub =>".$c= $this->a - $this->b.'<br />';
	}
	function mul (){
		echo "Multiple =>".$c= $this->a * $this->b.'<br />';
	}
	function div (){
		echo "Division =>".$c= $this->a / $this->b;
	}
}
 $obj = new Abbas();
 $obj->add();
 $obj->sub();
 $obj->mul();
 $obj->div();
 
 ?>
