<?php
$num = array(20, 520, 52, 755, 75, 15, 561, 656, 756, 765);

/*
 sort($num);
 $a = count($num);
 $b = $a-2;
 echo $num[1];echo "<br>";  // 2nd lowest
 echo $num[$b];             // 2nd highest

*/


$maxVal = $num[0];
$secondmaxval=0;
for($i=1; $i<count($num); $i++){
	if($num[$i] > $maxVal){
		$secondmaxval = $maxVal;
		$maxVal = $num[$i];
	}else if($num[$i] > $secondmaxval && $secondmaxval < $maxVal){
		$secondmaxval = $num[$i];
	}
}

echo $secondmaxval;

?>
