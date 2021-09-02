<?php
// Strings sõ variaveis muito especiais dentro do php.
//Existem dezenas de funções para tratamento de strings.
//(veremos mais à frente o qu são funções e como criar funções).

//Por exemplo, podemos apresentar um determinado caracter de uma string da seguinte forma.

$frase='Esta frase tem 29 caracteres.';
$n='<br>';
// apresentar o primeiro caracter da frase
echo $frase[0];
echo $n;

//apresentar o sexto caracter da frase
echo $frase[5];
echo $n;
echo $frase[3];

// Podemos comparar strings da seguinte forma.
$a='camila';
$b='Bianca';

if($a==$b){
    echo 'Os nomes são iguais';
}else
    echo'Os nomes são diferentes';

echo $n;

if($a==$b){
    $resposta ='true';
    echo $resposta;
} else if($a!=$b){
    $resposta ='false';
    echo $resposta;
}

//Existem muitas funções nativas do php para operar com string
//Exemplos

//retorno o numero total da string
$numer_caracter_total = strlen($frase);
echo $n;
echo $numer_caracter_total;
//retorna as letras a partit da posição 0 e durante 4 caracteres.
$primeira_palavra= substr($frase,8,12);
echo $n;
echo $primeira_palavra;
//converte toda string em letras maiúsculas
$todas_maiusculas = strtoupper($frase);
echo $n;
echo $todas_maiusculas;
//converte toda string em letras minusulas
$todas_minuscula=strtolower($frase);
echo $n;
echo $todas_minuscula;
//substituir uma letra por outra
$nova_frase=str_replace('a','v',$frase);
echo $n;
echo $nova_frase;
//verifica qual é a posição de um caracter dentro da string
$posicao =strpos($frase,'a');//3
echo $n;
echo $posicao;
//Nesta pagina voce poderá encontrar todas as funções para trabalhar com string
//php.net/manual/pt_BR/ref.strings.php
