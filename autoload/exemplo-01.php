<?php

//Autoload está depreciada no PHP 7.2
function __autoload($nomeClasse){

    var_dump($nomeClasse);
    require_once("$nomeClasse.php");
}

$carro = new DelRey();

$carro->acelerar(80);

?>