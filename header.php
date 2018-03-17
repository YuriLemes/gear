<?php
    session_start();
    require_once('helpers.php');
    if(!estaLogado()){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
	<title>Gear V1.0</title>
</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="home.php"><img src="img/logo.png" alt="logo sistema gear" width="110" height="50"/></a>
        </div>
        <div>
            <ul class="nav">
                <li ><a class="btn btn-success btn-home" href="usuario-lista.php">Usuários</a></li>
                <li ><a class="btn btn-success btn-home" href="#">Clientes</a></li>
                <li ><a class="btn btn-success btn-home" href="#">Produtos</a></li>
                <li>
                    <form action="logout.php" method="post">
                        <button class="btn btn-danger">Sair</button>
                    </form>
                </li>

            </ul>
        </div>
    </div> <!-- Container acaba aqui -->
</div>
