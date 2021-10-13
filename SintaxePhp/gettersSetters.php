<?php
// ACCESS LEVEL - Aspectos importantes a reter

// Uma boa pratica é criar o menor número de prpriedades de uma classe como pulbica.
// Colocar um propriedade como publica é expor em demasia essa propriedade.
//Um exemplo: imaginem que querem que uma propriedade de uma classe eja sempre um número.



class Pessoa{
    public $idade;
}
$eu = new Pessoa();
echo $eu->idade=30;
echo'<br>';
echo $eu->idade='Olá mundo';// isto é possivel porque o PHP não é strongly typed.

// Para definir corretamente este tipo de situação, podemos usar para definir e ir buscar os valores das propriedades privadas. Estes métodos permitem garantir que a integridade das propriedades seja mantida.

class Humano1{
    private $idade;
    
}
$eu->idade='camila';// não é possível efetuar, pois a propriedade é privada

// exemplo de implementaçao com accesso privado

class Pessoa1{
    private $idade=0;

    public function setIdade($valor){
        // verifica se $valor é numérico
        if(is_numeric($valor)){
            $this->idade=$valor;
        }
    }
    public function getIdade(){
        return "A idade é ". $this->idade;
    }
}
$pessoa = new Pessoa1();
$pessoa->setIdade(30);
echo'<br>';
echo $pessoa->getIdade();

//----------------------------------------------

class Tempo{

    private $segundos;


    function setSegundos($valor){
        if(!is_numeric($valor)|| $valor<0){
            $this->segundos =0;
        }else{
            $this->segundos=$valor;
        }
    }

    function getMinutos(){
        return "". $this->segundos/60;
    }

    function setMinutos($valor){
        if($valor==0){
            $this->segundos=0;
        }else {
            $this->segundos=$valor=60;
        }

    }
}