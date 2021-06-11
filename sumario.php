<?php  

// declaração de variavel
$idade = 28;
$nome = "Waldir";

echo $idade . $nome . "\r\n";

//operadores matematicos

$soma = 2 + 2;
$subitração = 2 - 2;
$divicao = 2 / 2;
$mutiplicacao = 2 * 2;

$expoente = 2 ** 2;

$resto = 10 % 3;

// tipo de variaveis

$idade = 28; // integer (float)
$valorNumeroPi = 3.14; // double (float)
$nome = "Waldir"; // string 
$verdadeiro = true ; // boolean

echo gettype($idade) . "\r\n"; // descobrir o tipo da variavel

//padrões de string

echo "Meu nome é $nome" . "\r\n"; // com "" reconhece a variavel e charcteres especias dentro da string 
echo 'meu nome é $nome' .  "\r\n"; // com '' o php intrepreta TUDO como string
echo 'meu nome é ' . $nome . ' e esse é um exemplo de concatenação' . "\r\n"; // exemplo de cocatenação... 

// quebra de linha 

echo "linha 1 \n";      //pode ser feita quebra de linha com o \n 
echo "linha 2 \r\n";    //pode ser feita quebra de linha com \r\n
echo 'linha 3' . "\n";  //pode ser feita quebra de linha com aspas simple concatenando \n ou \r\n
echo "linha 4" . PHP_EOL; //pode ser feita quebra de linha com PHP_EOL (End of line)
echo 'linha final' . PHP_EOL;

//comparações logicas

if ($idade >= 100) {  // if (condição <, >, ==, !=) {ação em caso true} 
    echo 'Você é muito experiente!!!' . PHP_EOL; // (||) (or) para ou e (and) (&&) para e 
} else { // else {ação caso false} 
    echo 'Você ainda tem muito tempo de vida' . PHP_EOL;
}

//repetição  (Programa para saber quantos e quais anos de copas do mundo já vi e vou ver vivendo até 100 de vida)

$contador = 0;

while ($contador <= 100) {
    echo "#$contador" , PHP_EOL;
    $contador ++ ; 
}
