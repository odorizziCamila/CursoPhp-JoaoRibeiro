<?php

//Operadores Logicos

// &&, ||, and, or, xor

// Os operadores logicos são frequentente usados com os operadores de comparação
// Eles permite ligar várias comparações avaliando se são verdadeiras ou falsas.
//No php a construção correta de instruções de condicionais depende destes operadores
// Instrução condicionais veificam se uma situação é verdadeira(true) e falsa(false)
// Conforme exemplos a seguir:

$t=100;
$p=200;


$m =($t<$p)&&($t<1000); //and--> true
$x=($t>$p)||($t>1000); //OR ---> false

