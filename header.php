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
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fa-svg-with-js.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script defer src="js/fontawesome-all.js"></script>
	<title>Gear V1.0</title>
</head>
<body>
<div class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="navbar-header">
            <a href="home.php"><i style="color: #0D7628; margin-right: 3px;" class="fas fa-home fa-lg"></i><img src="img/logo_small.png" alt="logo sistema gear"/></a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <div class="dropdown">
                        <button class="btn btn-success btn-home dropdown-toggle" type="button" data-toggle="dropdown" id="dropdownCadastro" aria-haspopup="true" aria-expanded="false">
                            Cadastros
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownCadastro">
                            <a class="dropdown-item disabled" href="#">Clientes</a>
                            <a class="dropdown-item disabled" href="#">Fornecedores</a>
                            <a class="dropdown-item disabled" href="#">Produtos</a>
                            <a class="dropdown-item disabled" href="#">Categoria Produtos</a>
                            <a class="dropdown-item disabled" href="#">Despesas</a>
                            <a class="dropdown-item" href="servico-lista.php">Serviços</a>
                            <a class="dropdown-item" href="usuario-lista">Usuários</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item active">
                    <div class="dropdown">
                        <button class="btn btn-success btn-home dropdown-toggle" type="button" data-toggle="dropdown" id="dropdownCadastro" aria-haspopup="true" aria-expanded="false">
                            Relatórios
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownCadastro">
                            <a class="dropdown-item disabled" href="#">A DEFINIR</a>
                        </div>
                    </div>
                </li>
            </ul>
            <form action="logout.php" method="post">
                <button class="btn btn-danger btn-sair">Sair</button>
            </form>
        </div>
    </div> <!-- Container acaba aqui -->
</div>
