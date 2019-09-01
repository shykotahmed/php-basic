<?php

$name="Shikut";
$from="Prottoy";

$balance=40.00;

echo($from." has ".$balance." BDT <br/>" );

// Prottoy has 40.00 BDT

function addBalance($addBal){
    $GLOBALS['balance']=($GLOBALS['balance']+$addBal);
    echo($addBal." added <br/>");

}

function widraw($amount){
    $GLOBALS['balance']=($GLOBALS['balance']-$amount);
    echo($amount." widraw <br/>");
}

addBalance(100);
echo($from." has ".$balance." BDT <br/>" );

addBalance(500);
echo($from." has ".$balance." BDT <br/>" );

widraw(10);
echo($from." has ".$balance." BDT <br/>" );

widraw(30);
echo($from." has ".$balance." BDT <br/>" );


?>