<?php
/**
 * Created by PhpStorm.
 * User: Yuri
 * Date: 27/03/2018
 * Time: 21:11
 */

session_start();
require('conecta_db.php');
require('Servico.php');
require('ServicoBO.php');

$id = $_POST['id'];
$descResumida = $_POST['cservico'];
$descDetalhada = $_POST['tdesc'];

$servico = new Servico();
$servico->setId($id);
$servico->setDescricaoResumida($descResumida);
$servico->setDescricaoDetalhada($descDetalhada);

try{
    ServicoBO::save($servico);
}catch (Exception $exception){
    $_SESSION['excecao']['mensagem'] = $exception->getMessage();
}
header('Location: servico-lista');