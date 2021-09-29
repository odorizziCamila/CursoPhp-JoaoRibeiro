<?php
// Classes - INTRODUÇÃO A POO(OOP) - PROGRAMAÇÃO ORIENTADA A OBJETOS

//Uma classe é um molde/forma/modelo a partir do qual criamos objetos. Exemplo: a classe humano é um modelo para a partir dela, criarmos um conjunto de homens e mulheres, cada um partilhando o mesmo "molde", mas com  prioridades e funções com valores diferentes.
//Homem e mulher tem ambos cabelo, mas o homem pode ter cabelo escuro e a mulher cabelo claro.

//teoricamente:
// class Humano
// cabelo, genero, peso, caminhar

//Homem -> Humano
// cabelo - castanho
//genero - masculino
//peso - 75
//caminhar()


//Mulher -> Humano
//cabelo - loiro
//genero - feminino
//caminhar()

// As classes são definidas pela declaração class, o seu nome e o bloco de codigo que contém as suas propriedades e metodos.
// Por conversão PSR-1, o nome de uma classe deve ser sempre atribuido na forma de StudlyCaps/PascalCase/MixedCase
// O corpo deve ser definido da seguinte forma:

Class Humano{
    // propriedade e métodos
}
class JogadorFutebol{
    //propriedades e métodos
}
// O corpo de uma classe contém propriedades e métodos
// Propriedades - São variáveis q guardam as caracteristicas do objeto.
// Métodos - São funções que definem o que o objeto pode fazer.

// As popriedades são também conhecidas como fields(campos) ou atributos de uma classe.
//Veremos o que isso significa mais a frente.

class FiguraGeometrica{
    public $largura, $altura;
    public $x=10;
    public $y=30;

    function novaArea($a, $b){
        return $a+$b;
    }

    
}
