<?php

//desafio de uma tabuada de um numero qualquer (7 no caso) de 0 a 9 

$numero = 7;

for ($i=0 ; $i<= 10; $i++) {
    $resultado = $i * $numero;
    echo "$i x $numero = $resultado" , PHP_EOL;  
}

