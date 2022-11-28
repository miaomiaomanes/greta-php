<?php
/* the bet between user and bank for the score of their card*/

/**get a random number for both user and bank */



function randomNum(): int
{  
    
    $roi = 14;
    $dame = 13;
    $valet = 11;
    $as = 12;
    $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, $roi, $dame, $valet, $as];
    return array_rand($cards);
}


/* to sum cards' score*/
function CardScore($CardOne, $CardTwo)
{

    $CardScore = $CardOne + $CardTwo;
    return $CardScore;
}

/* to sum user cards' score*/
$userCardOne = randomNum();

$userCardTwo = randomNum();
$userCardScore = CardScore($userCardOne, $userCardTwo);

/* to sum bank cards' score*/
$bankCardOne = randomNum();
$bankCardTwo = randomNum();
$bankCardScore = CardScore($bankCardOne, $bankCardTwo);



/* to compare the score of user and bank's cards*/
function compareScore($userScore, $bankScore)
{
    if ($userScore < 14) {
        $userCardThree = randomNum();
        $userScore = $userScore + $userCardThree;
        $bankCardThree = randomNum();
        $bankScore = $bankScore + $bankCardThree;
    };

    if ($userScore > $bankScore) {
        return $userScore;
    } else if ($userScore < $bankScore) {
        return $bankScore;
    } else {
        return "same";
    }
}

compareScore($userCardScore, $bankCardScore);
