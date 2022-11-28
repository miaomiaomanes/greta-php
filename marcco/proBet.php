<?php

/* draw one card out */
function draw_card()
{
    $randomNum = rand(0, 12);
    $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'V', 'D', 'R'];
    return $cards[$randomNum];
}

/* define card's value */
function card_value($value)
{
    return gettype($value) === "string" ? 10 : $value;
}
$refNum = draw_card();


/* sum the card's value */

function calculate_card_sum($card1, $card2)
{

    $sumCardValue = $card1 + $card2;
    return $sumCardValue;
}

/* le sum value de le player */
$drawPlayerCard1 = card_value($refNum);
$drawPlayerCard2 = card_value($refNum);
$drawPlayerCard3 = card_value($refNum);
$sumPlayerValue = calculate_card_sum($drawPlayerCard1, $drawPlayerCard2);

/* le sum value de le bank*/
$drawBankCard1 = card_value($refNum);
$drawBankCard2 = card_value($refNum);
$drawBankCard3 = card_value($refNum);
$sumBankValue = calculate_card_sum($drawBankCard1, $drawBankCard2);


/*comparer les value entre le play and le bank pour savoir qui sera gagner */
function guess_winner($userScore, $bankScore, $playerCard3, $bankCard3)
{
    if ($userScore < 12) {
        $userScore = $userScore + $playerCard3;
        $bankScore = $bankScore + $bankCard3;
    };

    if ($userScore > $bankScore) {
        return $userScore;
    } else if ($userScore < $bankScore) {
        return $bankScore;
    } else {
        return "same";
    }
}
guess_winner($sumPlayerValue, $sumBankValue, $drawPlayerCard3, $drawBankCard3);












// echo "Cartes tirées pour le joueur : " . $cards[$drawPlayerCard1] . " + " . $cards[$drawPlayerCard2] . "\n";

// $totalPlayer = (gettype($cards[$drawPlayerCard1]) === "string" ? 10 : $cards[$drawPlayerCard1]) + (gettype($cards[$drawPlayerCard2]) === "string" ? 10 : $cards[$drawPlayerCard2]);

// echo "Total joueur : " . $totalPlayer . "\n";

// echo "Cartes tirées pour la banque : " . $cards[$drawBankCard1] . " + " . $cards[$drawBankCard2] . "\n";

// $totalBank = (gettype($cards[$drawBankCard1]) === "string" ? 10 : $cards[$drawBankCard1]) + (gettype($cards[$drawBankCard2]) === "string" ? 10 : $cards[$drawBankCard2]);

// echo "Total banque : " . $totalBank . "\n";

// echo ($totalBank > $totalPlayer) ? "La banque a gagné.\n" : "Le joueur a gagné.\n";
