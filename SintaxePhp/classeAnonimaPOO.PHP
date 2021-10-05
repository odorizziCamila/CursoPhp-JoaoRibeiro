<?php
// CLASSES ANONIMAS
//Com o php 7 foi introduzido um conceito usado noutras linguagens e que se designa anónimas. Este tipo de classes só faz sentido quando queremos instanciar apenas um objeto dessa classe.

// Exemplos "Normal"

class Objeto{
    function teste(){
        echo 'teste - normal';
    }
}
$a = new Objeto();


// Exemplos com classe anonima

// Podemos definir de imediato o objeto
$b = new class{
    function testar(){
        echo 'teste - classe anónima';
    }
};

// Nota: é importante notar que tem que fechar o codigo com ponto e virgula.

$a->teste();
echo'<br>';
$b->testar();