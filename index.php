<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Gear V1.0</title>
</head>
<body>
<?php

    if(array_key_exists("sair", $_GET) && $_GET['sair']=='true') {
        $_SESSION['login']['logado'] = false;
    }
    if(!empty($_SESSION['excecao']['mensagem'])) :
        $msg = $_SESSION['excecao']['mensagem'];
        unset($_SESSION['excecao']['mensagem']);
?>
    <p class="alert alert-danger"><?=$msg?></p>
<?php
    endif;
?>
    <div class="login-principal">
        <img src="img/logo.png" alt="logo sistema gear"/>
        <hr/>
        <div>
            <form action="login.php" method="post" >
                 <input class="form-control" id="usuario" type="text" name="usuario" placeholder="Usuário"/>
                 <input class="form-control" id="senha" type="password" name="senha" placeholder="Senha"/>
                 <input class="btn btn-primary" type="submit" value="Entrar"/>
            </form>
        </div>
    </div>

<?php include('footer.php')?>
