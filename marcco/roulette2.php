<?php


/**pour avoir random numero  */
function rendNumber1()
{
    return rand(0, 36);
}

$referenceNumber1 = rendNumber1();


/**et ce que c'est pair ou pas?  */


function isOdd($resultat)
{

    $is_odd = $resultat % 2;
    return  $is_odd ? true : false;
}

isOdd($referenceNumber1);

/**
 * si num === randomnum alors on gagne sa mise
 */

$typeNumber = intval($argv[1]);
$typeEuro = intval($argv[2]);


function  isGagne($num, $randomNum, $euro)
{

    if ($num === $randomNum) {
        // echo " vous avez gagne" . " " . $euro ."\n";
        return $euro;
    } else {
        // echo " vous avez perdu" . " " . $euro ."\n";
        return -$euro;
    }
}

isGagne($typeNumber, $referenceNumber1, $typeEuro);


/* user input number */

function user_input_number($argvExample)
{

    if (count($argvExample) < 2) {
        echo "you should put at least one number ";
    } else {
        return $argvExample[1];
    };
}


function getUserParityBetInput($argvExample){
   
    
    if (count($argvExample) < 3) {
        echo "you should put at least one number ";
    } else {
        return $argvExample[2];
    };

}
