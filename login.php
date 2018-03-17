<?php
session_start();
require('conecta_db.php');
require('Usuario.php');
require('UsuarioBO.php');

$login = $_POST['usuario'];
$senha = $_POST['senha'];

$usuario = new Usuario();
$usuario->setLogin($login);
$usuario->setSenha($senha);

try {

    UsuarioBO::logar($usuario);
    header('Location: home.php');

} catch (Exception $exception){
    $_SESSION['excecao']['mensagem'] = $exception->getMessage();
    header('Location: index.php');
}