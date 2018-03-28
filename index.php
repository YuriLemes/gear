<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Gear V1.0</title>
</head>
<body>
<?php
include('exibir-erro.php');
?>
    <div class="login-principal">
        <img src="img/logo.png" alt="logo sistema gear"/>
        <hr/>
        <div>
            <form action="login.php" method="post" >
                 <input class="form-control" id="usuario" type="text" name="usuario" placeholder="Usuário"/>
                 <input class="form-control" id="senha" type="password" name="senha" placeholder="Senha"/>
                 <input class="btn btn-login" type="submit" value="Entrar"/>
            </form>
        </div>
    </div>

</body>
</html>
