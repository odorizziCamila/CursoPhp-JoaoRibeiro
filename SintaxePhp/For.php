<?php

//CICLOS/LOOPS
//FOR

// Permite executar um bloco de codigo determinado número de vezes. É constituido por três parâmetros.
//1. O iniciador - indica o valor inicial do contador.
//2. A condição - indica qual a condição para que o ciclo termine 
//3. O incremento - altera o valor do contador.

for($x =1; $x<10; $x++){
    echo $x.'<br>';
}
echo'<br>';

//mais uma vez, se for executada apenas uma expressão, não é necessário usar chaves ou chavetas.

for($x =1; $x<10; $x++)
    echo $x.'<br>';


// o primeiro e último parâmetro também podem ser divididos em vários parâmetros usando a vírgula como separador
for($contador = 1, $x=10; $contador <10;$contador++, $x--){
    echo $x.'<br>';
}

echo '<hr>';
//Podemos apresentar todos os dados de um array
$nomes =['camila','joao'];
for($i=0;$i<sizeof($nomes);$i++){// sizeof é uma função que permite contar quantos valor possui o meu array
    echo $nomes[$i].'<br>';
}

// foreach
// é um ciclo especialmente concebido para fazer uma iteração pelos valores de um array.

$nomes = ['camila','bianca','joao'];
foreach($nomes as $nome){
    echo $nome.'<br>';
}
echo'<hr>';

//existem ainda uma outra assinaura que permite ir buscar a chave e o valor do array
$capitais=[
    'portugal'=>'Lisboa',
    'Brasil'=>'brasilia'
];
foreach($capitais as $key =>$value){
    echo "Para o pais $key  capital é $value <br>";
}