<?php
// Concatenação de strings

//É o processo que, atraves do código, permite juntar várias strings.
//Existem dois operadores de concatenação:
// sendo estes: . e .=

$a = 'joao'.' '.'Ribeiro'; // o ponto irá ligar as diferentes strings.

$b='Joao';
$b.=' '.'Ribeiro';//.= faz a concatenação com o valor já existente na string.

echo $b;
echo'<br>';
echo $a;
//die();

$nome ='Camila';
$apelido='mila';
$nome_completo =$nome.' '.$apelido;

echo $nome_completo;
die();

