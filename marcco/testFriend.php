<?php
require_once("roulette2.php");

function testChoix(): bool
{
    $resultat = rand(0, 36);
    if ($resultat > 0 && $resultat < 36) {
        return false;
    } else {
        return true;
    }
}

return testChoix() ? "ok" : "ko";


function testNbImpair(): bool
{

    $res1 = isOdd(2);
    $res2 = isOdd(3);
    $res3 = isOdd(7);
    return $res1 === false && $res2 === true && $res3 === true;
}

return testNbImpair() ? "c'est bon" : "pas bon";

function testIsOdd()
{
    $valEven = 4;
    $valOdd = 5;
    return !isOdd($valEven) && isOdd($valOdd);
}

function testIsEven()
{
    $valEven = 4;
    $valOdd = 5;
    return isEven($valEven) && !isEven($valOdd);
}
 

function testRoulette()
{
    $rGagnant = roulette(20, '20');
    $rPerdant = roulette(2, '20');


    return $rGagnant === true && $rPerdant === false;
}