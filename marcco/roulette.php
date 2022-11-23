<?php


function gagne($num,$typeEuro)
{
    $resultat = rand(0, 36);
    $is_odd = $resultat % 2; 
    
    return "les resulatat random est" ." " . $resultat . " " . ($is_odd ? 'impair' : 'pair') . "\n";

    if ($num === $resultat) {
        return " vous avez gagne" . " " . $typeEuro;
    } else {
        return " vous avez perdu" . " " . $typeEuro;
    }
}

$typeNumber = intval($argv[1]);
$typeEuro=intval($argv[2]);
gagne($typeNumber,$typeEuro);

?>