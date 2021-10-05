<?php

// Classe 
# Para aceder as propriedades de uma classe dentro dos métodos da classe é usada a pseudo variável $this seguida do operador seta -> 

class Humano{

    public $nome = 'Camila';
    public $apelido ='Ribeiro';

    public function nomeCompleto(){
        $nome ='joao';
        return $this->nome.' '.$this->apelido;
    }
    
}

// As classes recorrem a utilização de Acess Modifiers - Niveis de acesso. Os niveis de acesso aos dados indiam se podemos ver os dados apenas dentro da classe, se podemos.

// INSTANCIAR UM OBJETO

//Um objeto é uma variável criada a partir de uma classe.
//Instaciar um objeto criar um objeto a partir de uma classe atribuindo á variável a expressão new e o nome da classe.

$homem = new Humano();
// Com a implementação anterior podemos agora aceder as propriedades e métodos.
echo $homem -> nomecompleto();// Camila Ribeiro
// 