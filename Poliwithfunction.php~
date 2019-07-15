<html>
<body>
	<form method="post">
		<input type="text" name="f_value" value="" />
		<button type="submit" name="submit" >Check Palindrome</button>
	</form>
</body>
</html>
<?php       // Palindrome is a word, phrase, sentence, or number that reads the same backward or forward.
		if(isset($_POST['submit']))
		{
			$myValue = $_POST['f_value'];
		//	echo 'Value is : '.$myValue;
			$reverse = strrev($myValue); //reverse the value
		//	echo '<br>Reverse value is: '.$reverse.'<br>'; 
			if($myValue == $reverse){
				echo "<span style='color:green'>Yes! the value is Palindrome!</span>";	
			}else{
				echo "<span style='color:red'>Oops! the value is not a Palindrome!</span>";		
			}
		}	
?>
