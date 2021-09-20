<?php
//Declaração/instrução do condicional
//switch alternativa ao if

$nome='camila';
switch($nome){
    case'camila':
    // codigo 1
    break;// esquecer todo o resto e avançar para o final.
    case'Andre':
    //codigo 2;
    break;
   default:
    //codigo 3
    break;
}

// Sintaxe alterntiva 
// normal
$valor =5;
if($valor==10){
    //codigo 1
}else {
    //codigo 2
}
//alternativa
if($valor==10):
    //codigo 1
else:
    //codigo 2
endif;

//switch
switch($variable):
    case 'value':
        //codigo
        break;
    default:
        //code..    
        break;
    endswitch;