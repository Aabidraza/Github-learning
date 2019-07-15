<?php
          // static
         // visibility ---> public , protected , private
	class house{
	
		public static $name = "Abid Raza";
		public static $abid = "Abid Raza is a Blogger";
		public $age = 28;
		
		public static function  hello(){
		
			return self::$abid;
		
		}
	
	}
	
	class shop extends house{
	
		public  function  bye(){
		
			return parent::$name;
		
		}
	
	
	}
	
	
	echo house::hello();
	echo shop::bye();
