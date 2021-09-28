<?php

// A partir do php 5.3 foram introduzidas as funçoes anónimas.
// Uma função anónima não tem nome e pode ser definida como o valor a atribuir a uma variavel.

$a = function(){
    echo'Olá';
};
// IMPORTANTE
//Vejam como, neste caso, apos a chave de fecho da funcao tem que surgir um ;
$a();

// Outro exemplo
$mensagem='fahffjfj';
$falar=function($mensagem){
    
 echo 'essa é a msg : '.$mensagem;
};
echo'<br>';
$falar('aqui');

// outro exemplo

$andar = function($metros){
    return"Andei $metros metros";

};
echo'<br>';
echo $andar(200);


//----------------

// Outro exemplo
// As funções anónimas são particularmente uteis quando queremos passar como argument para uma função.

$a= function(){
    return 'oi';
};
function falar($x){
 echo $x;
}
echo '<br>';
falar($a());