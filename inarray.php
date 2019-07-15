<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");
$peopleOther = "Test";
if (!in_array($peopleOther, $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
?>
