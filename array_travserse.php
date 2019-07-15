<?php

$array = array(2,5,42,20,12,11,31);

	for($i=0; $i<=count($array); $i++){
		for($j=$i+1; $j<=$i+1; $j++){
        
			if($array[$j] > $array[$i]){
				 $MaxDiff[] = $array[$j] - $array[$i];
				
			}
		 }	

	}
echo "Maximum Difference in given array :" .max(($MaxDiff));


?> 
