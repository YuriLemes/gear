<?php
/**
 * Created by PhpStorm.
 * User: Yuri
 * Date: 27/03/2018
 * Time: 20:18
 */

session_start();
require('conecta_db.php');
require('ServicoBO.php');

$id = $_GET['id'];

try {
    ServicoBO::remove($id);
}catch (Exception $e){
    $_SESSION['excecao']['mensagem'] = $exception->getMessage();
}
header('Location: servico-lista');

