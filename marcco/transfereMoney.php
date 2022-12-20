<?php

function transfereMoney($accountA, $accountB, $moneyTransfere)
{

    $account =[];

    if ($accountA > $moneyTransfere && "transfere compteA to compteB") {
        $accountA = $accountA - $moneyTransfere;
        $accountB = $accountB + $moneyTransfere;
       
       echo  'compteA =' . " " .$accountA ."\n" . "compteb =" . " " .$accountB;  
        return array_push($account, (object)[
            'account' => $accountA,
            'account' => $accountB,
         
    ]);
    // } else if ($accountB > $moneyTransfere &&  "transfere compteB to compteA") {
    //     $accountB = $accountB - $moneyTransfere;

    //     $accountA = $accountA + $moneyTransfere;
    //     echo  'compteA =' . " " .$accountA ."\n" . "compteb =" . " " .$accountB;
    
    //     return $accountA && $accountB;

    // }
     else {
        echo "not enough money in your account";
        return  false;
    }
}

transfereMoney(200, 100, 300);

?>