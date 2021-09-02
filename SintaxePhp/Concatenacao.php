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
//A diferença entre strings delimitadas por ' e por " é que no segundo caso podemmos fazer o seguinte.
$nome ='Camila';
$apelido='mila';
$nome_completo ="$nome $apelido";

echo $nome_completo;
//die();

// Ao contrario das ", nas strings ' as vaiaveis não são interpretadas relativamente ao seu valor(Parse)

// heredc e nowdoc(outras formas de delimitação)
//Apesar de não serem muit comuns, podem ser usadas para tratamento de maiores blocos de textos.

// o heredoc - Permite fazer o parse de vaiaveis.
$cliente ='camila';
$email='camilaodorizzi@gmail.com';
$texto=<<<label
olá $cliente.
Enviamos o documento para o seguinte email $email 
label;
echo $texto;