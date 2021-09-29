<?php

// Classe 
# Para aceder as propriedades de uma classe dentro dos métodos da classe é usada a pseudo variável $this seguida do operador seta -> 

class Humano{

    public $nome = 'Camila';
    public $apelido ='Ribeiro';

    public function nomeCompleto(){
        return $this->nome.''.$this->apelido;
    }
}
// As classes recorrem a utilização de Acess Modifiers - Niveis de acesso. Os niveis de acesso aos dados indiam se podemos ver os dados apenas dentro da classe, se podems 