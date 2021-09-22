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
for($i =0;$i<sizeof($nome);$i++){
    echo $nomes[$i].'<br>';
}
