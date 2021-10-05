<?php
//Herança de classes

// A herança é um mecanismo que através do qual podemos criar classes que herdam propriedades e métodos de outra classe.

// A classe inicial a partir da qual outras vão ser criadas, é designada por classe base.

//Todas as classes que vão herdar propriedades e métodos da classe base são designadas por classes derivadas

//Exemplos

class Animal{
    public $especie;
    public $peso;

    function tipoEspecie(){
        return "Este animal é da especie {$this->especie}";// utilizamos as chaves para poder concatenar 
    }

}

$animal = new Animal();
$animal-> especie='Mamifero';
 echo $animal->tipoEspecie();

 // Exemplo de uma classe utilizando herança

 class Mamifero extends Animal{
     // não é necessario rescrever atributos e métodos existentes na classe base(Animal)

     public $quantidade_pernas;
     public $tem_pelo;

     function temQuantasPernas(){
         return " O animal da especie {$this->especie} tem {$this->quantidade_pernas}";
     }
 }
 $mamifero = new mamifero();
 $mamifero->especie ='cavalo';
 $mamifero->quantidade_pernas =4;
 echo'<br>';
 echo $mamifero->temQuantasPernas();
 echo '<br>';
 echo $mamifero->tipoEspecie();