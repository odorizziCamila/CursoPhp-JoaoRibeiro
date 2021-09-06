<?php

//Arrays
// Um array(traduzido para o portugues significa matriz) é na realidade uma oleção de valores.
//Funciona como uma vaiavel, mas que pode conter muitos valores "arrumados" cada um o seu espaço.
//Esse espaço é designado por indice do array.
//Resumindo, um array é uma coleção constituida por chaves/indices e valores.
//As chaves/indices podem ser numericos(array numerico) ou strings(array asociaivo) e podem até coexistir os dois tipos de indices no array. Os valores pode ser de qualquer tipo, inclusive serem outros arrays.

//Exemplos;

$valores = array(1,2,3,4,5);
$nomes = array('Joao','Camila','Bianca');
//A partir do php 5.4 passou a ser possivel escrever os arrays de forma mais implificada.

$valores = [1,2,3,4,5,6];
$nomes = ['Joao','Camila','Bianca'];
