<?php
//Defina duas variaveis: nome e apelido
// numa estrutua basica de html, apresente um títul estático do tipo h3 com texto "O nome é:"
//Apresente em uma tag h1 o nome completo a partir das variaveis.

$nome='camila';
$apelido='mila';
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
        <h3>O nome completo é:</h3><h1><?php echo $nome .' '.$apelido?></h1>
        <br>
       
    
    </body>

</html>
