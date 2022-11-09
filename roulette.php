<?php
/* 
   $resultat = rand(0,36);

   $is_odd = $resultat % 2;

   $divise = $resultat /2;

   $is_even =(floor($divise)===$divise) 

   echo $resultat . " " . ($is_odd ? 'impair' : 'pair')   */


function gagne($num,$typeEuro)
{
    $resultat = rand(0, 36);



    $is_odd = $resultat % 2; 

    // $divise = $resultat /2;

    // $is_even =(floor($divise)===$divise);


    echo "les resulatat random est" ." " . $resultat . " " . ($is_odd ? 'impair' : 'pair') . "/n";

    if ($num === $resultat) {
        echo " vous avez gagne" . " " . $typeEuro;
    } else {
        echo " vous avez perdu" . " " . $typeEuro;
    }
}

$typeNumber = intval($argv[1]);
$typeEuro=intval($argv[2]);
gagne($typeNumber,$typeEuro);
