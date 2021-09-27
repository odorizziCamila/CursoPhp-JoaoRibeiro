<?php


// Escopo e ciclo de vida de uma variavel
// Normalmente uma variavel de PHP passa a existir a partir do local onde é iniciada e existe até o final da pagina.
//No entanto, quando temos variaveis dentro de uma função, elas tem um ciclo de vida limitado.


$variavel =10;
echo "O valor da variavel . $variavel";
funcao(10,30);

// $a e $b estas variavel vivem dentro de uma função, mas não existem fora

function funcao($a, $b){
   // echo "<p>$variavel</p>";//esta variavel não é conhecida dentro da função.
    echo"<p>$a e $b<p>";
}

function funcao2(){

}