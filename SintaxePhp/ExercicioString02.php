<?php
//Defina as variaveis nome e apelido com os respectivos valores.
//apresente o nome competo num paragrafo de html. 
// no segundo paragrafo apresente o seguinte;
// o nome tem x caracteres.
//sendo x o calculo total de caracteres do seu nome.

$nome='camila';
$apelido='mila';
$nomeCompleto="$nome $apelido";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" >
        <title>Curso PHP</title>

    </head>
    <body>
        <!---Sempre no interir do html--->
        <p><?php echo $nome.' '.$apelido
        ?></p>
        <p><?php  echo 'O nome tem '.mb_strlen($nomeCompleto)?></p>
        <br>
       
    
    </body>

</html>
