<?php
// Constructor
// O constructor é um método especial dentro de uma classe que é sempre executado automaticamente quando é criado um objeto a partir de uma classe. Este metodo é definido de uma forma especial com__ (dois underscore). São chamados métodos mágicos porque têm um execução específica ou automática associada.

class Humano{
    public $nome='Camila';
    public $apelido ='Odorizzi';

    Function __construct($a, $c)
    {
        $this->nome=$a;
        $this->apelido=$c;
        
    }

    public function nomeCompleto(){
        return $this->nome.' '.$this->apelido;
    }
}
$homem = new Humano();
echo $homem ->nomeCompleto();// Camila Odorizzi