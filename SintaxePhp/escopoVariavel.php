<?php


// Escopo e ciclo de vida de uma variavel
// Normalmente uma variavel de PHP passa a existir a partir do local onde é iniciada e existe até o final da pagina.
//No entanto, quando temos variaveis dentro de uma função, elas tem um ciclo de vida limitado.


$variavel =10;
echo "O valor da variavel . $variavel";
funcao(10,30);
//echo "$a, $b" ; $a e $b estas variavel vivem dentro de uma função, mas não existem fora

function funcao($a, $b){
   // echo "<p>$variavel</p>";//esta variavel não é conhecida dentro da função.
    echo"<p>$a e $b<p>";
}

// Global
//Neste exemplo, a variavel $a existe em dois escopos diferentes
// caso 1: ira apresentar o valor da variavel global, portanto a função irá apresentar o valor 10
$a=10;
function funcao3(){
    // global $a;
    $a=20;
}
funcao3();
echo"<p>$a</p>";
//---------------------------
// caso 2:
$a=10;
function funcao4(){
    global $a;
    $a=20;
}
funcao4();
echo"<p>$a</p>";

//outro exemplo
$b=200;


function funcao5(){
    $GLOBALS['b']=20;
}
funcao5();
echo $b;
echo'<br>';
//Ao contrario de outras liguagem, no PHP as variaveis definidas dentro de loops ou intruções condicionais não são destridas dentro desse escopo.

if(true){
    $a =100;

    echo'variavel A'. $a;
    echo'<br>';
}
 for ($i=0; $i<10; $i++){
     $x=1000;
 }
 echo'Variavel i e x'.$i .$x;