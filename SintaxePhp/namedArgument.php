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