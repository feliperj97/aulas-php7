<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Felipe");
$cad->setEmail("felipe@gmail.com");
$cad->setSenha("12345");

$cad->registrarVenda();

?>