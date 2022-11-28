<?php 
require_once("./bet.php");

/* test randomnum function */
function testIsNumberBetween1and14(): bool
{
   $num1 = randomNum();
   $num2 = randomNum();

   return $num1 >= 1 && $num2 >= 1 && $num1 < 13 && $num2 < 13 && $num1 !== $num2;
}

echo testIsNumberBetween1and14() ?
   "rendNum1() is okay" . "\n" : "rendNum1() is not okay" . "\n";


?>