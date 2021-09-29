<?php
// Funções cloruse
//São funções anónimas que podem usar variáveis do escopo global.
$x=20;
$v=10;

$minhaClosure = function($a) use($x,$v){
    echo"$a-$x-$v";
    $v+=200;
};
$minhaClosure(20);
echo "";// 

// ARROW FUNCTIONS
// São funções anónimas escritas de uma forma mais suscinta. Forma introduzidas no PHP 7.4 
//Suportam as mesmas caracteristicas de uma função CLOSURE, com diferença que capturam automaticamente as variáveis globais.

$x =20;
$y =30;
$minhaFuncao =fn($z)=>"$x-$y-$z";

echo $minhaFuncao(10);
//usam a palavra reservada fn e não necessitam nem das chaves/chavetas.