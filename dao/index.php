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
//$usuario = new Usuario();
//$usuario->login("felipe", "$($($");
//echo $usuario;

/* $aluno = new Usuario("julia", "%$#");

$aluno->insert();

echo $aluno; */

//Alterar usuário
/* $usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("Professor", "P00fr3550r");

echo $usuario; */

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();

echo $usuario;

?>