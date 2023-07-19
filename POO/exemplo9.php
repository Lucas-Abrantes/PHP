<?php

// Polimorfismo -> classes herdades que possuem os mesmos métodos, mas
// executam tarefas distintas


abstract class Animal{

    public function falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}


class Cachorro extends Animal{

    public function falar(){
        return "Late";
    }
}



class Gato extends Animal{

    public function falar(){
        return "Mia";
    }
}


class Passaro extends Animal{
    
    public function falar(){
        return "Canta";
    }

    public function mover(){
        // parent:: --> método estático para chamar o método da classe pai
        return "Voa e ". parent::mover();
    }
}


$pluto = new Cachorro();
echo "Classe cachorro:"."<br>";
echo $pluto->falar()."<br>";
echo $pluto->mover()."<br>";

echo "-----------------<br>";
echo "<br>";


$garfield = new Gato();
echo "Classe gato:"."<br>";
echo $garfield->falar()."<br>";
echo $garfield->mover()."<br>";

echo "-----------------<br>";
echo "<br>";

$passaro1 = new Passaro();
echo "Classe pássaro:"."<br>";
echo $passaro1->falar()."<br>";
echo $passaro1->mover()."<br>";

echo "-----------------<br>";
echo "<br>";


?>