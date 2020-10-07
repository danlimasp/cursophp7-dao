<?php 

require_once("config.php");
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

$usuariosJSON =  json_encode($usuarios);

echo $usuariosJSON;
*/

$root = new Usuario();
$root->loadbyId(3);
echo $root;

 ?>