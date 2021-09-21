<?php

// Ciclos/loops
// Existem quatro estruturas de ciclos em php
//Elas existem para permitir executar um determinado bloco de codigo várias vezes.
//WHILE
//Definimos a condição durante a qual o ciclo deve continuar a ser executado.
//Quando essa condição for falsa, o ciclo termina e o codigo avança


$x=1;
while($x<10){
    echo'ciclo em execução<br>';
    $x++;
}
echo '<hr>';

// outro exemplo
$i =0;
while($i<10){
    echo $i++.'<br>';
}

// Importante
// Nunca esquecer a alteração da condição, caso contrário teremos um ciclo infinito.
