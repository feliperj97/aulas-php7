<?php

require_once('config.php');
//carrega só 1 usuário
/* $root = new Usuario();
$root->loadById(2);

echo $root;
 */
//carrega uma lista de usuários
/* $lista = Usuario::getList();

echo json_encode($lista); */

//carrega lista de usuários buscando por login
//$search = Usuario::search("F");

//echo json_encode($search);
$usuario = new Usuario();
$usuario->login("felipe", "$($($");

echo $usuario;

?>