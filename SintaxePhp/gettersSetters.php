<?php
// ACCESS LEVEL - Aspectos importantes a reter

// Uma boa pratica é criar o menor número de prpriedades de uma classe como pulbica.
// Colocar um propriedade como publica é expor em demasia essa propriedade.
//Um exemplo: imaginem que querem que uma propriedade de uma classe eja sempre um número.



class Pessoa{
    public $idade;
}
$eu = new Pessoa();
$eu->idade='Olá mundo';// isto é possivel porque o PHP não é strongly typed.

// Para definir corretamente este tipo de situação, podemos usar para definir e ir buscar os valores das propriedades privadas. Estes métodos permitem garantir que a integridade das propriedades seja mantida.

class Humano1{
    private $idade;
    
}
