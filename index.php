<?php

require_once("config.php");

// Listar os usuários por ID
//$usuario = new Usuario();
//$usuario->loadById(1);

// Listar todos os usuários
//$usuarios = Usuario::getList();
//echo json_encode($usuarios);

// Listar usuarios por Login
//$usuarios = Usuario::search("admin");
//echo json_encode($usuarios);

// Listar o usuario usando login e senha
$usuario = new Usuario();
$usuario->login("root", "root");
echo $usuario;
?>