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
echo $opcao==1? $nome ='Joao':$nome='Antonio';
//podemos usar o operador ternario em várias situações distintas.
//por exemplo, para apresentar um determinado texto.

echo $opcao ==1? 'Sim':'Não';

//podemos usar o operador ternário em várias situações distintas.
//por exemplo, para apresentar um determinao texto.
echo $opcao == 1? 'Sim':'Não';
?>
<!-- Com instrução condicional IF -->
<?php if($opcao==1):?>
    <h2>Sim</h2>
<?php else:?>
    <h2>Não</h2>
<?php endif;?>
<!--Com operador ternario-->
<h2><?= $opcao ==1?'Sim':'Não'?></h2>
