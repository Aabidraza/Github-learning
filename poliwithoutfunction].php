<html>
<head>
<title>Write a Palindrome program in PHP without using strrev() function</title>
</head>
<body>
	
	<h3>PHP Program to find if a value is Palindrome or not!</h3>
	Enter a Value <br />
	<br />
	<form method="post">
	<input name="f_action" type="hidden" value="palindrome" />
		<input type="text" name="f_value" value="" autofocus tabindex="1"/>
		<button type="submit" name="submit" tabindex="2">Check Palindrome</button>
	</form>
</body>
</html>
<?php
		//check for post value of 'f_action' is equal to 'palindrome'
	if(isset($_POST['f_action'])=="palindrome")
{
        //get the post value from form
        $myValue = $_POST['f_value'];
        echo 'Value is : '.$myValue;
        $myArray = array(); // php array
        $myArray = str_split($myValue); //split the array
        echo '<br> Split the Array : ';
        echo '<pre>';
        print_r($myArray);
        echo '</pre>';
        $len = sizeof($myArray); // get the size of array
        $newString = "";
        //reverse the value
        echo 'Reverse the value: ';
        for ($i = $len; $i >= 0; $i--) 
        {
        echo $newString.' = '.$myArray[$i].'<br>';
        $newString.=$myArray[$i];
        }
        //check if the value and get reverse value is equal
        echo 'Check if the value and get reverse value is equal: '.$myValue.' == '.$newString.'<br>';
        if($myValue == $newString){
            echo "<span style='color:green'>Yes! the value is Palindrome!</span>";    
        }else{
            echo "<span style='color:red'>Oops! the value is not a Palindrome!</span>";    
        }
 
	}
?>
