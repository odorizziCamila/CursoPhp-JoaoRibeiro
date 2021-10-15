<?php

// Static 
// A palavra chave static pode ser usada para declarar propriedades e métodos de uma classe que podem ser acedidos sem que sejam necessário criar um objeto a partir dessa classe.

class Teste{


    // instance members - um membro por cada objeto criado a partir da classe
    public $nome;
    function teste(){
        //codigo
    }

    // static ou class members - apenas existentes uma vez na classe
    static $idade;
    static function mover(){
        //codigo aqui
    }
}

// Exemplo pratico 

class Operacoes{
    static $valor01;
    static $valor02;

    static function adicinar(){
        return self::$valor01+self::$valor02;

    }
    static function hashAleatorio(){
        return rand(0,1000);
    }
}
Operacoes::$valor01=10;
Operacoes::$valor02=20;
echo Operacoes::adicinar();
echo '<br>';
echo $hash = Operacoes::hashAleatorio();