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
//$usuario = new Usuario();
//$usuario->login("Willian Kaminski", "root");
//echo $usuario;

// Inserir novo usuario
//$usuario = new Usuario("Eliana", "123");
//$usuario->insert();
//echo $usuario;


// Alterar usuario
//$usuario = new Usuario();
//$usuario->loadById(6);
//$usuario->update("Maria Lucia","10/10");
//echo $usuario;

// Deletar usuário
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->delete();
echo $usuario;
?>