<?php

$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("LandRover",17,15)
  );
  
//$name = array ("php","java","html");
$a=count($cars,1);
echo "Number of element in an array: ";
echo $a;
die;
//https://www.letsknowit.com/php-programming-questions
//https://www.toptal.com/php/interview-questions
//https://phpsollutions.blogspot.com/2017/09/php-logical-questions-and-answers-that.html
//https://www.codementor.io/blog/php-interview-questions-sample-answers-du1080ext


 $str= "JOHN";
$str2 = "SMITHI";
$a = str_split($str);
$a2 = str_split($str2);
 
   static $j = 0;
   for($i = 0; $i<= 9; $i++){
	   if($i%2 !== 0 && $i >0) {
	    	array_splice($a,$i,0,$a2[$j]);
	   	$j++;
	    }
  }
 
 echo $str_new = implode('',$a);
 echo '<br/>';
 
 
 $array = array(
1 => "a",
"1" => "b",
1.5 => "c",
true => "d",
);
print_r($array);

echo '<br/>';

var_dump(0123 == 123);
var_dump('0123' == 123); 
var_dump('0123' === 123); 

//OUTPUT:
//bool(false)   //  As number precede by 0 leads to an octal number.
//bool(true)    // as 0123 is enclosed in quotes so it would be concerted to it's numeric value which is 123 so it is true.
//bool(false)  // it's false as o123 is quoted and is string so they are not identical.Their data type is different.
echo '<br/>';

$a = '1';
echo $b = &$a;
echo $c = "2$b";

//OUTPUT:
//1   // $b value will be 1
//21  // $c value will be 21 as 2 is concatenated to the value of $b.

echo '<br/>';

?>
<table width="300px" cellspacing="0px" cellpadding="0px" border="1px">  
   <!-- cell 270px wide (8 columns x 60px) -->  
    <?php  
        //$a = 1;
      for($row=1;$row<=10;$row++)  
      {  
          echo "<tr>";
         
          for($col=1;$col<=10;$col++)  
          {  
          	  /******Add For Color****/
          	  $total=$row+$col;  
          	  if($total%2==0)  
		  {  
		       echo "<td height=30px width=30px bgcolor=green>".($col * $row)."</td>";  
		  }  
		  else  
		  {  
		       echo "<td height=30px width=30px bgcolor=red>".($col * $row)."</td>";  
		  }  
		  /*******End *******/
		  
            // echo "<td>" .($col * $row). "</td>";
          }
          echo "</tr>";
      }
      ?>
 </table>
 
 
 <br>
 
  <table width="300px" cellspacing="0px" cellpadding="0px" border="1px">  

      <?php  
      for($row=1;$row<=8;$row++)  
      {   
          echo "<tr>";  
          for($col=1;$col<=8;$col++)  
          {  
		  $total=$row+$col;  
		  if($total%2==0)  
		  {  
		       echo "<td height=30px width=30px bgcolor=white></td>";  
		  }  
		  else  
		  {  
		       echo "<td height=30px width=30px bgcolor=black></td>";  
		  }  
          }  
          echo "</tr>";  
    }  
          ?>  
  </table>  
  
      <br>
 
  <table width="500px" border="1" cellpadding="3" cellspacing="0">  
    <?php  
    for($i=1;$i<=6;$i++)  
    {  
	echo "<tr>";  
	for ($j=1;$j<=5;$j++)  
	{  
		echo "<td>$i * $j = ".$i*$j."</td>";  
	}  
	echo "</tr>";  
      }  
    ?>  
    </table>
    
<br>
   <?
    echo '<br/>'; echo '<br/>';
    
/*How to write a Floyd's Triangle? 
1
23
456
78910
1112131415
*/
   
$a = 1;
for($i = 1; $i<=5; $i++)
{
    for($j = 1; $j<=$i; $j++)
    {
        echo $a;
        $a++;
    }
    echo '<br/>';
}
   
   
   
/*
How to print this Pattern:
*0
***00
******000
**********0000
***************00000
*/

 echo '<br/>'; echo '<br/>'; 
$k = 0;
for ($i=1; $i<=5; $i++)
{
    $k += $i;
    for ($j=1; $j<=$k; $j++)
    {   
       echo "*";
    }
        for ($z=0; $z<$i; $z++)
            {
                echo "0";
            }       
    echo "</br>";    
}   
  
/*
Write a program for this Pattern

*****
*    *
*    *
*    *
*****

*/  
echo "</br>";    echo "</br>";   
  
  for($i = 1; $i<=5; $i++){
            for($j = 1; $j<=5; $j++){
		if($i == 1 || $i == 5){
			echo "*";
		}
		else if($j == 1 || $j == 5){
			echo "*";
		}
		else {
			echo "&nbsp;&nbsp;";
		}
                
            }
            echo "<br/>";
		}
  
/*
 Write a program to print the below format : 
1 5 9
2 6 10
3 7 11
4 8 12
*/
 
  echo "<br/>"; echo "<br/>";
  for($i=1;$i<=4;$i++)
{
	$i1=$i+4;
	$i2=$i+8;
	echo $i." ".$i1." ".$i2;
	echo "<br />";
}
  
  
?> 
   

