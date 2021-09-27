<?php

// named argument/ funçoes
// O Php 8 introduz uma novidade: named arguments. Se olhares um exemplo até agora:
function adicionar($a,$b=10, $c=30){
    echo $a+$b+$c;
}
// No php 7, se quisermos alterar o valor de $c e manter o valor de $b.
//temos que oferecer todos os valores
adicionar(100,10,302);
echo '<br>';
// No php 8 podemos fazer da seguinte forma:
adicionar(c:1000, a:300);
echo'<br>';

// Informações adicionais sobre parametros e variadic

// Uma função nunca pode ser chamada sem que os valores obrigatórios sejam fornecidos 
//Exemplo:

function funcao($a,$b){
    
}
//funcao('teste');

function outraFuncao($a=8){
    echo"$a";// a variavel $a tera o mesmo valor de $x.
    $x = func_get_arg(0);
    $y = func_get_arg(1);
    $z = func_get_arg(2);
    echo"$x - $y - $z";
    echo '<br>';
    echo func_num_args(); //avalia a quantidade de argumentos qu foram passados na função.
}
outraFuncao(10,20,30);

//variadic parameter
function minhaFuncao(... $argumentos){
    foreach($argumentos as $v){
        echo"$v<br>";
    }
}
minhaFuncao(10,20,30,40,50,60);