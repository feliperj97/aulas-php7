<?php

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
        return "Miar";
    }
}

class Passaro extends Animal{
    public function mover(){
        return "Voa e " . parent::mover();
    }
}

$g = new Gato();
echo $g->falar() . "<br>";

$p = new Passaro();
echo $p->mover() . "<br>";

$c = new Cachorro();
echo $c->falar() . "<br>";
echo $c->mover();
?>