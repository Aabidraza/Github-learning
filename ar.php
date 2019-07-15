<?php
$a=array('5'=>2,'8'=>4,'9'=>3);
$b=array('Parent'=>'5','Parent'=>'8','Parent'=>'9');
$f = array_flip($b);

//$c = array_intersect_key($a,$f);

	/*foreach ($a as $key => $value) {

		foreach ($b as $key => $value) {
	
		}

	}*/
				$c = array_map(function($b) use ($a){
						$chng = $a[$b['Parent']];
						$b['Parent'] = $chng;
						return $b;
					}, $a);
					print_r($c);
?>
