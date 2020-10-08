<?php 

require_once("config.php");


//Carrega 1 usuário
/*
$root = new Usuario();
$root->loadbyId(3);
echo $root;
*/

/*
//Carrega uma lista de usuários
$lista = Usuario::getList();
$listaJSON = json_encode($lista);

echo $listaJSON;
*/

/*
//Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("der");
$searchJSON = json_encode($search);
echo $searchJSON;
*/

//Carrega um usuário usando o login e a senha

$usuario = new Usuario();
$usuario->login("root", "987654321");

echo $usuario;



?>