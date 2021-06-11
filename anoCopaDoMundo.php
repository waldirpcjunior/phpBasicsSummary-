<?php

$anoAtual = date('Y');
$idade = 28;
$anoCopaDoMundo = 1930;
$anoDeNacimento = $anoAtual -  $idade;
$AnoQueVouTerCemAnos = $anoDeNacimento + 100;
$viu = 0;
$vera = 0;

while ($anoCopaDoMundo <= $AnoQueVouTerCemAnos) {

    if($anoCopaDoMundo > $anoDeNacimento && $anoCopaDoMundo < $anoAtual) {
        
        if ($anoCopaDoMundo <= 1938 || $anoCopaDoMundo >= 1950) {
        
            echo "Você Viu a copa de $anoCopaDoMundo" , PHP_EOL;
            $viu = $viu + 1;

        }

    } else if ($anoCopaDoMundo > $anoAtual) {

        echo "você verá a copa de $anoCopaDoMundo" , PHP_EOL;
        $vera = $vera + 1;
    }
    $anoCopaDoMundo = $anoCopaDoMundo + 4; 
}

$total = $viu + $vera;

echo "Você viu $viu Copas do mundo" , PHP_EOL;
echo "Você vera mais $vera Copas do mundo", PHP_EOL;
echo "No total de 100 anos serão $total Copas do mundo" , PHP_EOL;