<?php

//Return
// A declaração return provoca o fim da execução de uma função, retornando ao local onde a função foi chamada.

function falar(){
    return;
    echo 'Não será apresentado o texto';

}
// opcionalmente podemos usar o return para devolver um valor. Desta forma, uma função pode ser responsável, por exemplo, por desenvolver um conjunto de calculos e devolver o resultado.

function adicionar($a,$b){
    $resultado = $a+$b;
    return $resultado;
    // ou
    return $a+$b;
    
}
echo adicionar(10,50);
echo '<br>';
// outro exemplo
$nome ='camila';
if(avaliar_nome($nome)){
    echo 'O cliente está correto';
}else{
    echo'O cliente está errado';

}
function avaliar_nome($n){
    if($n == 'joao'){
        return true;
    }else {
        return false;
    }
}
echo'<br>';
//Uma funcao sem qualquer valor de retorno, devolve sempre um valor null

function teste(){
    // codigo..
}

if(falar()==null){
    echo'Funcao com retorno igual a nulo';
    //sera apresentado este texto.
}