<?php

//operador ternario
//É um operador condicional que pode substituir uma estrutura simples IF ELSE
//O operador necessita de tres expressoes ou areas:
//1. A expressão qu será avaliada como verdadeira.
//2. A expressão que será executada como verdadeira.
//3. A expressão que será executada como falsa.

$opcao =0;
$nome= $opcao==1?'Joao':'Antonio';
//podemos também usar da seguinte forma:
$opcao==1? $nome ='Joao':$nome='Antonio';
//podemos usar o operador ternario em várias situações distintas.
//por exemplo, para apresentar um determinado texto.

echo $opcao ==1? 'Sim':'Não';

//podemos usar o operador ternário em várias situações distintas.
//por exemplo, para apresentar um determinao texto.
echo $opcao == 1? 'Sim':'Não';
?>