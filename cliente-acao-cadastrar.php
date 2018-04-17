<?php

session_start();
require('conecta_db.php');
require('Cliente.php');
require('ClienteBO.php');

$nome = $_POST['cnome'];
$razaoSocial = $_POST['crazaoSocial'
$dtCadastro = $_POST['cdtCadastro'];
$dtSuspenso = $_POST['cdtSuspenso'];
$cpf_cnpj = $_POST['ccpf_cnpj'];
$ie = $_POST['cie'];
$telefone = $_POST['ctelefone'];
$email = $_POST['cemail'];
$celular = $_POST['ccelular'];
$observacoes = $_POST['cobservacoes'];
$logadouro = $_POST['clogadouro'];
$complemento = $_POST['ccomplemento'];
$numero = $_POST['cnumero'];
$estado = $_POST['cestado'];
$cidade = $_POST['ccidade'];
$cep = $_POST['ccep'];

$cliente = new Usuario();


try{
    ClienteBO::save($cliente);
    
}catch (Exception $exception){
	echo $exception->getMessage();
   
    $_SESSION['excecao']['mensagem'] = $exception->getMessage();
}
header('Location: cliente-lista');