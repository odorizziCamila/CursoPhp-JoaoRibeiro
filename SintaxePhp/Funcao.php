<?php

//Function/funções
//Funções são blocos de codigo identificados por nome e uma assinatura e que pemite que o código seja reutilizado e organizado de uma forma muito mais consistente.

//Estes blocos só são executados quando são solicitados.

//Definimos uma função usando a palavra chave function, seguida de um nome. Um conjunto de parentess e um bloco de código.

// Forma correta da escrita de uma função

function funcao(){
    //código da função aqui
}
//exemplo da sua aplicação
echo 'Inicio da nossa aplicação';
echo'<br>';
executar();

function executar(){
    echo 'A funcao foi executada';

}
// No php o nome das funçoes é case insensitive
// por exemplo function falar() e exetamente igual a function Falar()

// Forma de como devemos definir um nome
//Podem ser usados vários padrões para o nome das funçoes. os mais comuns são o camel e o snake case.
function camelCase(){

}
function snake_case(){

}