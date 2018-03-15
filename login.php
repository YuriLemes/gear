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
$logou = UsuarioBO::logar($usuario);

if($logou){
    // MOSTRAR A TELA PRINCIPAL;
    header('Location: home.php');
}else{
    // MOSTRAR AVISO "USUARIO E/OU SENHA INVÁLIDOS" NA TELA DE LOGIN
    header('Location: index.php?logou=false');
}