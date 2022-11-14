<?php
require_once("./roulette2.php");



/**
 * je voulais tester si le function isOdd marche ou pas :
 * 
 * - si le function odd marche qui sera sortir impair,
 * si non, c'est pair
 * 
 * 
 */

/**
 * 
 */
//  function testIsNumberBetween0and36():bool{
//   $res=rendNumber(20);
//   $res1=rendNumber(37);
//   return $res=== true && $res1===false;

//  };

// testIsNumberBetween0and36();











function testIsNumberBetween0and36($num)
{
   if ($num > 0 && $num < 36) {
      return true;
   } else {
      return false;
   }
}

testIsNumberBetween0and36($referenceNumber1);
echo testIsNumberBetween0and36($referenceNumber1) . "\n";


function testIsOdd():bool
{
   $res = isOdd(5);
   $res1 = isOdd(6);

   return $res === true && $res1 === false;  
}
echo testIsOdd() ? "isOdd okay" : "isOdd pas bon";














// function testIsOdd($number):bool {
//      if(36>$number || $number>0){

//       $sentence = isOdd(5);
//       $sentence2= isOdd(6);
//       preg_match('/\b\w+\b/i', $sentence, $result); 
//       preg_match('/\b\w+\b/i', $sentence2, $result2); 



//       if($result[5]=='impair' && $result2[5]=='pair'){
//          return true;
      
//       } 
      
//      }else{
//       return false;
//      }
   
// }


// testIsOdd($choixNumber);
