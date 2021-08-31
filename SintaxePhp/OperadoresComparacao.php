
<?php

// Operadores de comparação com 3 símbolos, comparam valor e tipo de valor.


$a =(2!=3);
echo $a;

$num=2;
$num1=3;
if($num!=$num1){
    echo 'true';
} else
 echo 'false';


 // No php 7 foi adicionado um novo operaddor de comparação, designado por spaceeship operator
 // <=>
 
 $x =1 <=>1; //sempre q a variável for igual irá devolver 0.

 $x=3<=>2; // Sempre que o valor da esquerda for maior q o valor da direita  resultado será 1.

 $x = 1<=>2; // Sempre que valor da esquerda for menor que o valor da direita o resultado será 0.
 