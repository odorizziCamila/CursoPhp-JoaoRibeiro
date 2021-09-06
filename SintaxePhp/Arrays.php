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
echo $n='<br>';
echo $nomes[1];
//Nunca esquecer que os arrays tem indice de base 0.
echo $n;
$dados = [
    10=>100,
    20=>200,
    30=>300
];
echo $dados[10];

// se quiser adicionar um novo elemento ao final da coleção, ele vai assumir o indice +1;
$dados[]=400;//$dados[31];
echo $n;

//Sempre que queremos apresentar um valor de um array, usamos o seu indice.
//Da mesma forma, podemos alterar o valo do array usando o seu indice.

$valores =[10,20,30];
$valores[1]=2000; //$valores=[10,2000,30];

//podemos também ignorar o indice para adicionar um novo elemto ao array
$valores[]=3000; //$valores =[10,20,30,3000];
// Ou ainda 
array_push($valores,5000);//$valores=[10,2000,30,3000,5000];

//para apresentar valores de um array numa string, podemos fazer da seguinte forma:
echo 'Os valores são:'.$valores[0].'e'.$valores[1];
echo $n;
echo "Os valores são: $valores[0] e $valores[1]";


//Arrays associativos
//Ao contrario dos arrays numéricos, as chaves são do tipo string

$dados = [
    'A'=>20,
    'B'=>30,
    'C'=>40,
    'D'=>50
];
//ou
$dados= [
    'nome'=>'Joao',
    'email'=>'joao@gmail.com',
    'nacionalidade'=> 'Brasileiro'

];


]