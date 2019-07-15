<?php

// PHP 5 introduced the magic function __autoload() which is automatically called when your code references a class or interface that hasn't been loaded yet. The major drawback to the __autoload() function is that you can only provide one autoloader with it


       include "afridi.php";
       include "john.php";
       include "rahul.php";
       
       $afridi = new afridi();
       $john = new john();
       $rahul = new rahul();
       
       
       
       
