<?php

//https://www.letsknowit.com/php-programming-questions
//https://phpgurukul.com/php-programming-logical-interview-questions-answers/
//http://www.array99.com/blog/18/logical-interview-questions-for-php-developer
//https://www.geeksforgeeks.org/programs-printing-pyramid-patterns-php/
//https://www.w3resource.com/php-exercises/
//https://www.toptal.com/php/interview-questions



// mysql
//https://intellipaat.com/interview-question/mysql-interview-questions/
//https://www.javatpoint.com/mysql-interview-questions
//https://career.guru99.com/top-50-mysql-interview-questions-answers/
//https://www.educba.com/mysql-interview-questions/
//https://www.edureka.co/blog/interview-questions/mysql-interview-questions/
//https://www.deskbright.com/sql/mysql-interview-questions/
//https://www.careerride.com/MySQL-Interview-Questions.aspx
//https://www.testingbrain.com/interview/mysql-interview-questions.html
//https://www.letsknowit.com/mysql-questions

$array = [1,4,10,1,10,6,11,12];


$n = $array[0];
$sumArray = [];
$sum = 0;
for($i=1;$i<count($array);$i++) {
if($array[$i] >= $n) {
$sum = $array[$i] - $n;
array_push($sumArray,$sum);
}  
$n = $array[$i];
}
print_R($sumArray);
?>
