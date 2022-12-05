<?php

require_once("./proBet.php");

/**
 * est-ce que "blackjack.php" sait renvoyer une carte
 * parmi 1, 2 ..., 10, V, D, R ?
 * et ce de manière aléatoire ?
 */
function test_can_draw_card(): bool
{

    $num1 = draw_card();
    $num2 = draw_card();
    $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'V', 'D', 'R'];

    return in_array($num1, $cards) && in_array($num2, $cards) && $num1 !== $num2;
}

/**
 * est-ce que blackjack est capable de renvoyer la valeur
 * numérique d'une des cartes ? en particulier 10
 * pour Valet, Dame, Roi.
 */
function test_can_get_card_value()

{
    $testIsOk = true;
    $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'V', 'D', 'R'];
    $cardsRes = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, 10];


    for ($i = 0; $i < count($cards); $i++) {
        $res = $cardsRes[$i] === card_value($cards[$i]);
        $testValue = $res && $testIsOk;
    }
    return $testValue === true;
}

/**
 * est-ce que le code de blackjack est capable de calculer
 * la somme des 2 cartes tirées au sort ?
 */
function test_can_calculate_card_sum()
{
    $sumCard1 = calculate_card_sum(10, 2);
    $sumCard2 = calculate_card_sum(6, 7);
    return $sumCard1 === 12 && $sumCard2 === 13;
}

/**
 * est-ce que le code de blackjack est capable de
 * déterminer qui a gagné la partie ?
 */
function test_can_guess_winner()
{
    $winner1 = guess_winner(19, 18);
    $winner2 = guess_winner(22, 18, );
    $winner3 = guess_winner(11, 18);
    return $winner1 === true && $winner2 === false && $winner3 === false;
}

$koString = "\033[31m❌\033[0m\n";
$okString = "\033[32m✔️\033[0m\n";

echo "test_can_draw_card " . (test_can_draw_card() ? $okString : $koString);
echo "test_can_get_card_value " . (test_can_get_card_value() ? $okString : $koString);
echo "test_can_calculate_card_sum " . (test_can_calculate_card_sum() ? $okString : $koString);
echo "test_can_guess_winner " . (test_can_guess_winner() ? $okString : $koString);
