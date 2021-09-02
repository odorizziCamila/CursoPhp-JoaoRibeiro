<?php
//Caracteres de escape

echo'<p> Este é um paragrao de HTML</p>';
echo'<br>';

//Os caracteres de escape são usados para escrever caracteres especiais,com é o cas de alguns simbolos que podem entrar em conflito com o código.

//$frase1='I'm going to John's Party!';
//echo $frase1;
//$frase2="I'm going to John's party!";
//$frase3="I'm not sure John"The great" will win this fight.";
// a\ é o símbolo para definir um carater de escape.
$frase4='I\'m going to John\'s Party';
echo $frase4;

// apenas tem o comportamento desejado no terminal

echo 'Joao Ribeiro\n\rTeste';
echo"Joao Ribeiro\n\rTeste";
