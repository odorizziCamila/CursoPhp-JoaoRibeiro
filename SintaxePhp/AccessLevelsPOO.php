<?php
// ACCESS LEVELS - NIVEIS DE ACESSO
// Existem 3 tipos de niveis de acesso a elementos(propriedades e métodos) dentro de uma classe. Sendo estes publico, protected e private.

class MinhaClasse{
    public $a;
    protected $b;
    private $c;
}

$variavel = new MinhaClasse();
$variavel->$a=10; // posivel
$variavel->$b =30; // não é possível
$variavel->$c=40; // não é possível

// ACCESS PUBLIC
// Os membros publicos (propriedades e métodos) de uma classe, estão sempre acessiveis, se criarmos um objeto a partir da classe, temos acesso direto a esses elementos.

class TudoPublico{
    public $propriedade;

    public function metodo(){
        echo'método publico';
    }
}
$objt = new TudoPublico();
$objt->$propriedade ='a';
$objt->metodo();


//ACCESS PROTECTED
//Um elemento protected pode ser alcançado dentro da classe e dentro de qualquer classe que seja uma extensão de outra classe.


class ClasseTeste{
    public $publica="a";
    protected $protegida ="b";
    private $privada ="c";
}
function info(){
    return "{$this->publica}";
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
$obj->protected ="2"; //  gera erro
$obj->privada ="3"; // gera erro



