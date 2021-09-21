<?php
// Expressão match
// No php 8 foi introduzida uma nova expressão condicional designada por match, é muito semelhante ao switch, mas com uma sintaxe mais concista.

// com switch
$x =5;
switch($x){
    case 5:
        echo 'parou no 5';
        break;
    case 4:
        echo 'parou no 4';
        break;
    case 10:
        echo 'parou no 10';
        break;
    default;
    echo ' é um numero diferente de 5,10..';
    break;


    
}
// Com Match

echo match($x){
    5=>'parou no 5',
    10=>'parou no 10',
    15=>'parou no 15',
    default =>'é um numero diferente de 5, 10 ou 15'
};
//Importante
//No switch, as comparações podem ser feitas só por valor(==).
// No caso do Match, são sempre feitas por valor e tipo(===)

