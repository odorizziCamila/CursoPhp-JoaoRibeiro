<?php

//Declaração/instrução condicionais

//São instruções utilizadas para controlar o filtro da apicação de acordo com determinadas condições

//Para a verificação das condições destas declarações, recorremos ao uso de operadores de comparação combinados com os operadores lógicos.

//O php contém várias estruturas condicionais, como iremos ver, e no Php 8 foi introduzida mais uma estrutura que também iremos ficar a conhecer.


//Declarações/instruções condicionais
//Declaração de IF - deine blocos de código que só são executados se a declaração fo verdadeira(true)

$nome = 'Camila';
if($nome=='Camila'){
    echo'Nome correto';
}
//if else

$idade =20;
if($idade<=20){
    echo 'Adolescente';
} else {
    echo'Adulto';
}
