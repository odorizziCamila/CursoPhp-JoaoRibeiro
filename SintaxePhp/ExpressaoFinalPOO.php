<?php
//final

// Para impedir q uma classe derivada possa fazer override de método, podemos utilizar a expressao FINAL da seguinte forma:

use Humano as GlobalHumano;

class Veiculo{
    final function mover(){

    }
}
class bicicleta extends Veiculo{
    //function mover(){// utilizando o final na função mover da class veiculo não será possivel a criação da função mover dentro da classe que extender da mesma.
        

    }


// Podemos inclusive definir que uma classe como não sendo passível de ser herdada colocando FINAL antes da classe.
//Conforme exemplo a seguir:

final class Humano{
     function teste(){
        echo'teste';
    }
}



