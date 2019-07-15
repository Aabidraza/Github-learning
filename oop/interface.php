<?php 

http://razabrosproduction.blogspot.com/2017/06/15-interesting-short-riddles-urdu.html




// All methods declared in an interface must be public; this is the nature of an interface.
// All methods in the interface must be implemented within a class.
// Interfaces can be extended like classes using the extends operator.
// We cannot create objects to interface, but the class implementing the interface can have objects
// We cannot define a variable in an interface.
// If we extend interface all the methods of the interface must be implemented in the child class.

	interface  A {
		public  function abc();
	}
	
	interface  B {
		public  function xyz();
	}	
	
	interface test extends A,B {
	
		public  function test();
		
	}
	
	class D implements test {
	public function abc(){
			echo "First Interface Functions<br />";
		}
		
		public function xyz(){
			echo "Second Interface Functions<br />";
		}
		public function test(){
			echo "test Interface Functions<br />";
		}
	}
	
	$obj = new D;
	$obj->abc();
	$obj->xyz();
	$obj->test();
	


/**************************

Abstract class	       Interface

(1)It can have constants, members, method stubs (methods without a body), methods

(1)It can only have constants and methods stubs.

(2)Methods and members can have public or protected  visibility

(2)Methods of interface should only be public not any other visibility

(3)The concept of multiple inheritances not supported.

(3)An interface can extend or a class can implement multiple other interfaces.
 
(4)Child class must implement all the abstract method of parent class when extend keyword is used.

(4)No need of implementing methods from parent interface when interface  is extending another interface
?>
