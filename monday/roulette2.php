<?php

// $typeNumber = intval($argv[1]);
// $typeEuro=intval($argv[2]);


// function rendNumber($num){
//     return 0<$num && $num<36;
// }
// $referenceNumber = rand(0,36);
// rendNumber($referenceNumber);
// echo $referenceNumber;






function rendNumber1(){
    return rand(0,36);
}

$referenceNumber1=rendNumber1();












function isOdd($resultat){
   
    $is_odd = $resultat % 2; 
    return  $is_odd ? true : false;
} 
$choixNum = rand(0, 36);
isOdd($choixNum);













// function  isGagne($num, $euro){
//     if ($num === $euro) {
//         echo " vous avez gagne" . " " . $euro;
//     } else {
//         echo " vous avez perdu" . " " . $euro;
//     }

// }

// isGagne($typeNumber,$typeEuro);








?>