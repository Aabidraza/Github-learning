<html>
<body>	
	<form method="post">
		<input type="text" name="f_value" value="" />
		<button type="submit" name="submit" >Check Palindrome</button>
	</form>
</body>
</html>
<?php
		if(isset($_POST['submit']))
		{
			$myValue = $_POST['f_value'];
			//echo 'Value is : '.$myValue;
			$myArray = array(); // php array
			
			$myArray = str_split($myValue); //split the array
			//echo "<pre>";print_r($myArray);
			 $len = sizeof($myArray); 
			$newString = "";
			
			for ($i = $len; $i >= 0; $i--)   //reverse the value
			{
				 $newString.=$myArray[$i];
			}
			echo '<br>Reverse value is: '.$newString.'<br>';

			if($myValue == $newString){
				echo "<span style='color:green'>Yes! the value is Palindrome!</span>";    
			}else{
				echo "<span style='color:red'>Oops! the value is not a Palindrome!</span>";    
			}

		}
?>
