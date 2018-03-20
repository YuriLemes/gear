<?php include('header.php');
require_once('UsuarioBO.php');
    $usuarios = UsuarioBO::findAll();
?>

	
<div class="container centralizar">
  <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
   <?php foreach ($usuarios as $usuario):?>
                    <tr>
                        <td>João</td>
                        <td><?=$usuario->getLogin()?></td>
                        <td><?=$usuario->getPerfil()?></td>
                        <td>
                            <form action="#" method="post">
                                <button class="tooltip btn btn-primary disabled" type="submit" formaction="#">
                                    <i class="fas fa-pencil-alt"></i>
                                    <span class="tooltiptext">Alterar</span>
                                </button>
                                <button class="tooltip btn btn-danger disabled" type="submit" formaction="servico-remover.php?id=<?=$usuario->getId()?>">
                                    <i class="fas fa-times"></i>
                                    <span class="tooltiptext">Remover</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach;?>
                 </tbody>
        </table>
    </div>
</div>
<div class="container">
    <input type="button" class="btn btn-success" value="Novo"/>
</div>
<?php include('footer.php')?>