<?php
require('conecta_db.php');
require('Usuario.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$logou = Usuario::logar($usuario,$senha);

if($logou){
    // MOSTRAR A TELA PRINCIPAL;
    header('Location: home.php');
}else{
    // MOSTRAR AVISO "USUARIO E/OU SENHA INVÁLIDOS" NA TELA DE LOGIN
    header('Location: index.php?$logou=false');
}