<?php

// desafio 1 imprimir todos os numeros impares de 0 a 100 

for ($i = 0 ; $i <= 100 ; $i++) {
    
    $div = $i / 2;
    $impar = gettype($div); 
    
        if ($impar == 'double'){
            
            echo $i , PHP_EOL;
        }    
}
