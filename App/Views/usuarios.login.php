<?php
if (isset($mensagem)){
    echo $mensagem;
}?>
<div class="login-principal">
    <img src="/App/Views/img/logo.png" alt="logo sistema gear" width="360" height="216"/>
    <hr/>
    <div>
        <form action="/login" method="post" >
             <input id="usuario" type="text" name="usuario" placeholder="Usuário"/>
             <input id="senha" type="password" name="senha" placeholder="Senha"/>
             <input class="btn-login" type="submit" value="Entrar"/>
        </form>
    </div>
</div>