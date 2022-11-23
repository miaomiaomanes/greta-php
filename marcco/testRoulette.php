<?php
require_once("./roulette2.php");


// testIsNumberBetween0and36();

/* test randomnum function */

function testIsNumberBetween0and36(): bool
{
   $num1 = rendNumber1();
   $num2 = rendNumber1();

   return $num1 >= 0 && $num2 >= 0 && $num1 < 36 && $num2 < 36 && $num1 !== $num2;
}

echo testIsNumberBetween0and36() ?
   "rendNum1() is okay" . "\n" : "rendNum1() is not okay" . "\n";

/* isOdd function marche ou pas */

function testIsOdd(): bool
{
   $valEven = [4, 6, 8, 10,62,68,70];
   $valOdd = [3, 5, 7, 9, 13,17];
   $valEvenStr=count($valEven);
   $valOddStr =count($valOdd);
   $testIsOkay=true;

   for ($i = 0; $i < $valEvenStr; $i++) {
        $resEven=0;
     
         $res[$i] = isOdd($valEven[$i]);
       //  $resEven =+ intval($res[$i]);
         $resEven = $res[$i]=== false;       
   }

   var_dump($resEven);


   for ($i = 0; $i < $valOddStr; $i++) {
          $resOdd=0;
      
          $res1[$i]= isOdd($valOdd[$i]);

          $resOdd = $testIsOkay && $res1[$i];
   
       //   $resOdd =+ intval($res1[$i]);

       //   var_dump($res1[$i]);
         
          
   } 

   var_dump($resOdd);
   



   
   return $resEven===true && $resOdd === true;
}
echo testIsOdd() ? "isOdd okay" . "\n" : "isOdd pas bon" . "\n";

/*isGagne function is good or not */

function testIsGagne(): bool
{
   $res = isGagne(5, 5, 100);
   $res1 = isGagne(5, 6, 100);


   return $res === 100 && $res1 === -100;
}
echo testIsGagne() ? "isGagne okay" . "\n" : "isGagne not okay" . "\n";

/* test si le numero que l'user a mis marche ou pas*/

function test_user_input_number()
{

   $argv_example = [
      "roulette2.php",
      "12",
      "100"
   ];

   return  user_input_number($argv_example) === "12";
}

echo test_user_input_number() ? "userinputnumber function is okay" : "userinputnumber function is not okay";




function test_can_get_user_parity_bet_input(): bool
{
    // Exemple de données récupérées depuis
    // la ligne de commande.
    // ici ex: `php test_roulette.php 13 pair 100`
    $argvExample = [
        "test_roulette.php", // nom du script
        "13", // argument1 en ligne de commande
        "pair", // arguement2 en cli
        "100", // argument3 en ligne de commande
    ];
    $userInput = getUserParityBetInput($argvExample);

    return $userInput === 'pair';
}


























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
