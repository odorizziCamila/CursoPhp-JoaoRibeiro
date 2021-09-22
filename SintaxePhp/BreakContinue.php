<?php

//BREAK, CONTINUE E GOTO
// Existem dua funções especiais dentro dos loops:

//BREAK

//Serve para interroper a execução de um loop

for($i=0;$i<20;$i++){
    echo $i.'<br>';
    if($i==10){
        break; //interrope o loop.
    }
}

echo'<hr>';

$nomes = ['Camila','Ana','Bianca'];
foreach($nomes as $nome){
    echo $nome.'<br>';
    if($nome =='Ana'){
        break;
    }
}
echo'<hr>';

//Continue
//Permite avançar uma volta do ciclo ignorando o código que deveria ser executado
for($i =0; $i<20; $i++){
    if($i==10){
        continue; // volta à linha inicial do loop.
    }
    echo $i.'<br>';
}

    echo'<hr>';

$nomes = ['Camila','Ana','Carolina','Pedro'];
foreach($nomes as $nome){
    if($nome =='Carolina'){
        continue;
    }
    echo $nome .'<br>';
}
echo '<hr>';


//GOTO
//É muito pouco usado porque torna a leitura do código mais complexa.
//Foi intrduzido no PHP 5.3 e permite sair do loop e ir para uma linha de código definida por um label(nome seguido de :)

for($i=0; $i<20; $i++){
    if($i==11){
        goto teste;// vai executar o label
    }
    echo $i.'<br>';
}
echo 'Fim do loop';
teste:
echo 'Aqui';