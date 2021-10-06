<?php
// OVERRIDING
// O mecanism de overriding permite a uma classe derivada ter métodos reescritos especificamente para essa classe.

// Por exemplo, podemor ter um método teste na classe base e ter  o mesmo método teste com código deferente na classe derivada.

class Animal{

    function mover(){
        echo'Mover a partir da classe base.';
    }
}
class Mamifero extends Animal{

}
class Peixe extends Animal{

}


// Para alem do conceito da classe base e classe derivada, temos o conceito de parente class(classe pai). É a classe a partir da qual fazems a derivação.

// Exemplo de construtor deste tipo de classes.


class Retangulo{

    public $largura, $altura;
    function __construct($a,$b){
        $this->largura=$a;
        $this->altura=$b;
    }

    function calcularArea(){
        return $this->largura*$this->altura;
    }
}

class Quadrado extends Retangulo{

    function __construct($a){
        $this-> largura=$a;
        $this->altura=$a;
    }
    function teste(){
        echo "A lagura do quadrodo é:{$this->largura} e a altura é {$this->altura}";
    }
    
}

$quadrado = new Quadrado(20);
$retangulo = new Retangulo(10,30);
echo 'A area do quadrado é: '.$quadrado->calcularArea();
echo'<br>';
echo 'A area do retangulo é: '.$retangulo->calcularArea();
echo '<br>';
echo $quadrado ->teste();
