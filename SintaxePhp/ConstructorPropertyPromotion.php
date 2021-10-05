<?php

// Constructor
// Exemplos

use Humano as GlobalHumano;

class Humano{
    public $nome;
    public $apelido;


    function __construct($a,$b){
        $this->nome =$a;
        $this->apelido =$b;
    }

}
//No php  podemos criar a mesma classe da seguinte forma:
class Humano1{


    function __construct(public $nome, public $apelido){
        $this->nome=$nome;
        $this->apelido=$apelido;
    }
    
        
    
    public function falar(){
        // codigo
    }

    private function andar(){
        // método apenas acessível dentro da class
    }
    public function movimento(){
        $this->andar();
    }
}

// Podemos ter classes sem qualquer tipo de método e podemos ter classes sem qualquer tipo de propriedade.

// Ao instanciar - mos a classe Humano, podemos aceder diretamente as suas propridades, pelo facto de estarem identificadas com o acesso modificar public 


$homem1 = new Humano('Joao','Silva');
$mulher = new humano1('Camila','Odorizzi');

echo $homem1->nome.' '.$homem1->apelido;
echo '<br>';
echo $mulher ->nome.' '.$mulher->apelido;

// é importante lembrar que ao contrario do nome das variaveis, o nome das classes é case insensitive.