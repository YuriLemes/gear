<?php
/**
 * Created by PhpStorm.
 * User: Yuri
 * Date: 27/03/2018
 * Time: 20:36
 */

session_start();
require('conecta_db.php');
require('UsuarioBO.php');

$id = $_GET['id'];

try {
    UsuarioBO::suspend($id);
}catch (Exception $e){
    $_SESSION['excecao']['mensagem'] = $exception->getMessage();
}
header('Location: usuario-lista');