<?php
// Function/ Funções - parâmetros

//Como vimos anteriormente, uma função tem um nome e um conjunto de parênteses, dentro desses parênteses, nos podemos definir um conjunto de parâmetros(assinatura da função)
// Exemplo

function adicao($a, $b){
    //codigo da função aqui
}

//Nesta funcao adição, temos dois parâmtros $a e $b.
//São duas vaiáveis de php que va existir dentro da função.
// Os parâmentros permitem passar valores para o interior de uma função quando ela é chamada.
// O parâmetros são separados por virgula.

adicionar(10,20);

function adicionar($a, $b){
    echo"$a + $b = ".$a+$b;
    echo'<br>';
    echo"$a + $b = ".($a+$b);
    echo'<br>';
}
// No php 8 já não são necessáios os parênteses nas operações

$nomes = ['João', 'Ana','Carlos'];
foreach($nomes as $nome){
    saudacao($nome);
}
function saudacao($valor){
    echo"Bom dia, $valor.<br>";
}
// conclusão
// parâmetro é o nome das variáveis existentes na definição da função, argumentos são os dados passados quando o função é chamada.


//parametros opcionais 
//Podemos criar funções que tem parametros com um valor pré definido. A chamada dessas funções não obriga a definir argumentos para esses parametros.

function multiplicar($a, $b =9){
    //$a será o valor passado por agumento
    //$b será:
    //o valor do argumento se ele for passado na chamada.
    // o valor 9 se não for passado o argumento.

    echo 'o valor é: '.$a * $b;
}
multiplicar(2);

