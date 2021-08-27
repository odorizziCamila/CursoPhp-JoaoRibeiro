<?php

//Variáveis
# são usadas para guardar dados: números, textos, etc;
#podemos apresentar e modificar os seus valores ao longo do código.
#Define se com o simbolo de cifrão($) e um identificador(nome da vaiável)
# Exemplo $nome
#podemos identificar e iniciar uma variável
#$numero =100;
#podemos alterar o tipo de valores de uma variavel 
//$numero = "teste";


#As variáveis são case sensitive
$variavel ="uma variável";
$Variavel ="outra variável";


//Exemplo de regras para definição de variáveis no php 

//não podemos iniciar variavel com algarismo
// não podemos iniciar com simbolo.
// não pode conter espaço
//não pode conter parenteses
// não pode conter hifen


//Exemplos de formas corretas de criação de variável

$var1 =0;
$var_um=0;
$varUm = 0;
$_um=0;
$_1=0;

echo $var1;

//Convenções

$umaVariavel =0; //camel case 
$uma_variavel =0; //com undersores(snake case) palavras separadas por underline
$UmaVariavel = 0; //studly case (não recomendado)


// Obs recomendado manter o msm estilo para todo projeto
