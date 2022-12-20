<?php
//require_once "./transfereMoney.php";

function can_test_transfereMoney():bool
{
    $accountA = [100, 200, 300];
    $accountB = [400, 500, 600];
    $money = [10, 40, 700];
    $res = transfereMoney($accountA[0], $accountB[0], $money[0]);
    $res1 = transfereMoney($accountA[1], $accountB[1], $money[1]);
    $res2 = transfereMoney($accountA[2], $accountB[2], $money[2]);

        // if you transfere money from accountA to accountB: 
        $res === [110,390]? $test1 = true : $test1 = false;
        $res1 === [160,340]? $test2 = true : $test2 = false;
        // if the transfer amount is higher than the account balance, the result will be false; 
        $res2 === false ? $test3 = true : $test3 = false;

    return $test1 && $test2 && $test3;
}

echo can_test_transfereMoney() ? "is okay" . "\n" : " not okay" . "\n";
