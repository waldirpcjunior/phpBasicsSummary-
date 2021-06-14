<?php

$peso = 80;
$altura = 1.80;

$imc = $peso / $altura ** 2; 
$imcFormatado = round($imc, 2);

if ($imcFormatado >= 25){
    echo "seu imc é $imcFormatado e está acima do normal";
} else if ($imcFormatado < 18.5) {
    echo "seu imc é $imcFormatado e está abaixo do normal";
} else {
    echo "seu imc é $imcFormatado e está normal";
}

