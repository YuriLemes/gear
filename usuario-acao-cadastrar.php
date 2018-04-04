<?php

session_start();
require('conecta_db.php');
require('Usuario.php');
require('UsuarioBO.php');

$nome = $_POST['cnome'];
$login = $_POST['clogin'];
$senha = $_POST['csenha'];
$ativo = $_POST['cativo'];
$perfil = $_POST['cperfil'];
$cnpj = $_POST['ccnpj'];

$usuario = new Usuario();
$usuario->setNome($nome);
$usuario->setLogin($login);
$usuario->setSenha($senha);
$usuario->setAtivo($ativo);
$usuario->setPerfil($perfil);
$usuario->setCnpjEmpresa($cnpj);

try{
    UsuarioBO::save($usuario);
    echo "chegou no try";

}catch (Exception $exception){
    $_SESSION['excecao']['mensagem'] = $exception->getMessage();
}
/*header('Location: usuario-lista');*/