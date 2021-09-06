<?php

//Arrays
// Um array(traduzido para o portugues significa matriz) é na realidade uma oleção de valores.
//Funciona como uma vaiavel, mas que pode conter muitos valores "arrumados" cada um o seu espaço.
//Esse espaço é designado por indice do array.
//Resumindo, um array é uma coleção constituida por chaves/indices e valores.
//As chaves/indices podem ser numericos(array numerico) ou strings(array asociaivo) e podem até coexistir os dois tipos de indices no array. Os valores pode ser de qualquer tipo, inclusive serem outros arrays.

//Exemplos;
//forma antiga de declaração
$valores = array(1,2,3,4,5);
$nomes = array('Joao','Camila','Bianca');
//A partir do php 5.4 passou a ser possivel escrever os arrays de forma mais implificada.


//Nova forma de declaração
$valores = [1,2,3,4,5,6];
$nomes = ['Joao','Camila','Bianca'];


//Estes arrays são de indices númericos.
//Para apresentar um dos seus valores, procedemos da seguinte forma:
echo $valores[0];
echo $nome[1];
//Nunca esquecer que os arrays tem indice de base 0.

