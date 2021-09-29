<?php
// Um generator é uma função que permite gerar séries de valores. Cada valor é denominado pela função através da instrução yield. Ao contrário de return, a instrução yiels guarda o estado da função, permitindo que a função continue a partir do estado onde ficou na ultima chamada.

function buscar_numero(){
    for($i =0; $i<10;$i++){
        yield $i;
    }
}