<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
print_r($cars);
//output->Array ( [0] => BMW [1] => Toyota [2] => Volvo )

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
print_r($numbers);
//output->Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 11 [4] => 22 )
	
?>
