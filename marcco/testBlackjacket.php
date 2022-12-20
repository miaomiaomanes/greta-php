<?php

require_once("blackjack.php");

/**
 * est-ce que "blackjack.php" sait renvoyer une carte
 * parmi 1, 2 ..., 10, V, D, R ?
 * et ce de manière aléatoire ?
 */
function test_can_draw_card($cards)
{
    $card1 = drawCard($cards);
    $card2 = drawCard($cards);
    return $card1 !== $card2 && in_array($card1, $cards)  && in_array($card2, $cards);
}

/**
 * est-ce que blackjack est capable de renvoyer la valeur
 * numérique d'une des cartes ? en particulier 10
 * pour Valet, Dame, Roi.
 */
function test_can_get_card_value($cards)
{
    // $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'V', 'D', 'R'];
    $testResult = true;
    $values = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 10, 10, 10];
    foreach ($cards as $i => $card) {
        $value = getCardValue($card);
        $testResult = $testResult && $value == $values[$i];
    }
    return $testResult;
}

/**
 * est-ce que le code de blackjack est capable de calculer
 * la somme des 2 cartes tirées au sort ?
 */
function test_can_calculate_card_sum()
{
    return false;
}

/**
 * est-ce que le code de blackjack est capable de
 * déterminer qui a gagné la partie ?
 */
function test_can_guess_winner()
{
    return false;
}

$koString = "\033[31m❌\033[0m\n";
$okString = "\033[32m✔️\033[0m\n";

echo "test_can_draw_card " . (test_can_draw_card($cards) ? $okString : $koString);
echo "test_can_get_card_value " . (test_can_get_card_value($cards) ? $okString : $koString);
echo "test_can_calculate_card_sum " . (test_can_calculate_card_sum() ? $okString : $koString);
echo "test_can_guess_winner " . (test_can_guess_winner() ? $okString : $koString);
