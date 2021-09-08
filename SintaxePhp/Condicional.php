<?php

//Declaração/instrução condicionais

//São instruções utilizadas para controlar o filtro da apicação de acordo com determinadas condições

//Para a verificação das condições destas declarações, recorremos ao uso de operadores de comparação combinados com os operadores lógicos.

//O php contém várias estruturas condicionais, como iremos ver, e no Php 8 foi introduzida mais uma estrutura que também iremos ficar a conhecer.


//Declarações/instruções condicionais
//Declaração de IF - define blocos de código que só são executados se a declaração for verdadeira(true)

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


//if..else if ... else
$nota =5;
if($nota<=2){
    echo'nota fraca';
} elseif($nota<=4){
    echo'nota insuficiente';
}elseif($nota<=6){// neste ponto do codigo ele executa e apresenta 
    echo'nota positiva';
}elseif($nota<=8){
    echo'nota boa';
}else{
    echo'nota excelente';
}

//Uso de operadores lógicos

$numero =20;
if($numero>10 && $numero!=30){
    //executa o código
}else{
    //executa outro código
}

//condições dentro de condições
if($numero>0){
    if($numero>=100){
        echo 'O numero é igual ou maior que 100';
    }else{
        echo'O numero e positivo mais menor que cem';
    }
}
    else{
        echo'O número é negativo';
    }

}