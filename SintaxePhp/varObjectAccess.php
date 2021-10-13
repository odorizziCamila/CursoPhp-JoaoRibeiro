<?php
//VAR Keyword
// tem o mesmo comportamento de public, mas apenas existe por retrocompatibilidade devido ao codigo escrito antes do PHP 5. Não é recomendável usar porque poderá em breve passar a ser não suportado.



class Homem{
    var $nome, $apelido;

}
$eu = new Homem();
$eu->nome='Joao';
$eu->apelido='Ribeiro';

// OBJECT ACCESS

// No php, um objeto instanciado a partir de uma classe pode aceder a elementos privados e protegidos de outro objeto, criado a partir da mesma clase.
// Este comportamento não acontece na maior parte das linguagem de programação

class Humano{

    private $nome='a';
    
    function setPrivate($objeto, $valor){
        $objeto->nome=$valor;
    }
    function apresentar(){
        echo $this->nome;
    }
}

$a = new Humano();
$b = new Humano();
$a-> setPrivate($b,'Joao');

$a->apresentar();
echo'<br>';
$b->apresentar();
