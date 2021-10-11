<?php
// ACCESS LEVELS - NIVEIS DE ACESSO
// Existem 3 tipos de niveis de acesso a elementos(propriedades e métodos) dentro de uma classe. Sendo estes publico, protected e private.

class MinhaClasse{
    public $a;
    protected $b;
    private $c;
}

$variavel = new MinhaClasse();
$variavel->a=10; // posivel
//$variavel->$b =30; // não é possível
//$variavel->$c=40; // não é possível

// ACCESS PUBLIC
// Os membros publicos (propriedades e métodos) de uma classe, estão sempre acessiveis, se criarmos um objeto a partir da classe, temos acesso direto a esses elementos.

class TudoPublico{
    public $propriedade;

    public function metodo(){
        echo'método publico';
        echo'<br>';
    }
}
$objt = new TudoPublico();
$objt->propriedade ='a';
$objt->metodo();


//ACCESS PROTECTED
//Um elemento protected pode ser alcançado dentro da classe e dentro de qualquer classe que seja uma extensão de outra classe.


class ClasseTeste{
    public $publica="a";
    protected $protegida ="b";
    private $privada ="c";
}


class ClasseDerivada extends ClasseTeste{
    function teste(){
        echo $this->publica;// possível
        echo $this->protegida;// possível
        echo $this->privada;//erro
    }
}
$obj = new ClasseTeste();
$obj->publica ="1"; // possivel
//$obj->protected ="2"; //  gera erro
//$obj->privada ="3"; // gera erro

$obj = new ClasseDerivada();
$obj->publica="1";

// na classe derivada que extends da classe tesste temos a seguinte situação

$objt1 = new ClasseDerivada();
$objt1 -> publica ="1";// possivel
//$objt1 -> protegida ="2";//gera erro
//$objt1 -> privada ="3";// gera erro


// ACESS PRIVATE 
// Só pode ser visivel dentro da propria classe.
//Não é visivel nos objetos instanciados nem noutras classes herdadas.
//-----------------------

//Ao contrario das propriedades, os métodos não necessitam de ter umm nível de acesso especificado claramente.
// Se não for identificado, por dentro  o método é publico.


class Teste{
    private $valor="a";


    function mover(){
        // codigo aqui
        echo $this->valor; 
    }
}
$a = new Teste();
$a->mover(); //possivel
//$a->valor='1';//não é possivel

