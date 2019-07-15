
<html>

<body>


	<form method="post">
		<input type="text" name="f_value" value="" />
		<button type="submit" name="submit" >Check Palindrome</button>
	</form>
</body>
</html>
 
<?php 
		//check for post value of 'f_action' is equal to 'palindrome'
	if(isset($_POST['submit']))
{
		//get the post value from form
		$myValue = $_POST['f_value'];
		echo 'Value is : '.$myValue;
		//reverse the value
		$reverse = strrev($myValue);
		echo '<br>Reverse value is: '.$reverse.'<br>';
		//check if the value and get reverse value is equal
		if($myValue == $reverse){
			echo "<span style='color:green'>Yes! the value is Palindrome!</span>";	
		}else{
			echo "<span style='color:red'>Oops! the value is not a Palindrome!</span>";		
		}
	}	
?>
