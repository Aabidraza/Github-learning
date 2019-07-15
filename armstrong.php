<?php

/*Q - How to find whether a number armstrong or not ?

Answer- An Armstrong number of three digits is an integer such that the sum of the cubes of its digits is equal to the number itself.

For example, 371 is an Armstrong number since 3**3 + 7**3 + 1**3 = 371.
*/

if(isset($_POST['submit']))
{
$number = $_POST['num'];      // get the number entered by user
$temp = $number;
$sum  = 0;
while($temp != 0 )
{
$remainder   = $temp % 10; //find reminder
$sum         = $sum + ( $remainder * $remainder * $remainder );
$temp        = $temp / 10;
}
if( $number == $sum )
{
echo "$number is an Armstrong Number";
}else
{
echo "$number is not an Armstrong Number";
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Whether a number Armstrong or not</title>
</head>
<body>
 <form name="armstrong" action="" method="post">
 Number :<input type="text" name="num" value="" required=""><br>
 <input type="submit" value="Submit" name="submit">
 </form>
</body>
</html>
