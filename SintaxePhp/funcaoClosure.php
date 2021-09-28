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