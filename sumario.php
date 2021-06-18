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

round ($valorNumeroPi, 2); // arredondar e fixar a quantidade de numeros decimais.

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
    // echo "#$contador" , PHP_EOL;
    $contador ++ ;    //o incremento pode ser dessas maneiras ($contador += 1) ou ($contador ++) ou ($contador = 1 + $contador)
}

for ($cont = 1 ; $cont <= 100 ; $cont++){   // (variavel inicial; condição ; incremento)
    // echo "#$cont" , PHP_EOL;
} 

$contador = 0;

while ($contador <= 100) {
    if ($contador == 77) {
        // continue;              // (continue = continuar a executar a linha de codigo fora da condicional) (Break = interrompe a execução do codigo)
    }

    echo "#$contador" , PHP_EOL;
    $contador ++ ;    
}

// array

$lista = array('a','b','c','d') ; 
$lista2 = ['aa','bb','cc','dd','ee'] ; 

echo count ($lista2) , PHP_EOL; // serve para contar o numero de posições de uma array 

for ($i=0 ; $i < count($lista2); $i++){ // imprime todos os itens da array 
    echo $lista2[$i], PHP_EOL; 
}

$pessoa = [
    'nome' => 'waldir',
    'idade' => 28,
    'altura' => 1.78,
    'peso' => 78
]; // nomeando o indice da arry... 

echo $pessoa['nome'], PHP_EOL; 
echo $pessoa['idade'], PHP_EOL; 
echo $pessoa['altura'], PHP_EOL; 
echo $pessoa['peso'], PHP_EOL; 

$pessoa2 = [
    'nome' => 'João',
    'idade' => 78,
    'altura' => 1.58,
    'peso' => 54
]; 

$pessoa3 = [
    'nome' => 'jose',
    'idade' => 17,
    'altura' => 1.98,
    'peso' => 95
]; 

$listaDePessoas = [$pessoa, $pessoa2, $pessoa3]; // modelo de array associativo 

for ($i=0 ; $i < count($listaDePessoas); $i++){ 
    echo $listaDePessoas[$i] ['idade'] , PHP_EOL; // imprime apenas o indice idade dos arrays 
}

//foreach 

$listaDePessoas2 = [
    101 => $pessoa, 
    102 => $pessoa2, 
    103 => $pessoa3];

    // caso o indice de um array associativo não seja numerico(foi renomeado) o foreach consegue executar o loop mesmo sem conhecermos a chave de cada item no caso o 101 102 e 103. 

foreach ($listaDePessoas2 as $pessoa) { 
    echo $pessoa['nome'] . PHP_EOL;
}

// for ($i=0 ; $i < count($listaDePessoas2); $i++){ 
//     echo $listaDePessoas2[$i] ['idade'] , PHP_EOL; 
// }  
//esse for é um experimento ditadico para provar que não é possivel executar o loop um array associativo com o indice nomeado ou não numerico!!! 

foreach ($listaDePessoas2 as $numeroId => $pessoa) { // a variavel $numeroId serve para indicarmos ou manipular os indices antes nomeados (101 , 102 ...).  
    echo $numeroId . $pessoa['nome'] . PHP_EOL;
}

//adicionando um item no array

$pessoa4 =[
    'nome' => 'Roberta'
];


$listaDePessoas [] = $pessoa4;                          // neste caso a adicição do item $pessoa4 está correto pois o array 
for ($i=0 ; $i < count($listaDePessoas); $i++){         //$listaDePessoas está com os indices não modificados ($pessoa = 0 $pessoa2 = 1 $pessoa3 =2) 
    echo $listaDePessoas[$i] ['nome'] , PHP_EOL;        //e irá adicionar no proximo valor disponivel qué o indice 3
}

$listaDePessoas2 [] = $pessoa4; 
foreach ($listaDePessoas2 as $numeroId => $pessoa) { 
    echo $numeroId . $pessoa['nome'] . PHP_EOL;
}