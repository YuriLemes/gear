<?php include('header.php');
require_once('UsuarioBO.php');
    $usuarios = UsuarioBO::findAllActive();
?>

<div class="container centralizar">
  <table class="table-fixed table table-striped table-bordered">
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
                        <td><?=$usuario->getNome()?></td>
                        <td><?=$usuario->getLogin()?></td>
                        <td><?=$usuario->getPerfil()?></td>
                        <td>
                            <form action="#" method="post">
                                <button class="tooltip btn btn-info" type="submit" formaction="#">
                                    <i class="fas fa-eye"></i>
                                    <span class="tooltiptext">Visualizar</span>
                                </button>
                                <button class="tooltip btn btn-primary
                                    <?php
                                        if(!adminLogado() && $_SESSION['login']['usuario'] != $usuario->getLogin()):
                                            echo "disabled" ?>" <?php echo "disabled";
                                        endif;?> type="submit" formaction="#">
                                    <i class="fas fa-pencil-alt"></i>
                                    <span class="tooltiptext">Alterar</span>
                                </button>
                                <button class="tooltip btn btn-danger
                                    <?php
                                        if(adminLogado() && $_SESSION['login']['usuario'] == $usuario->getLogin()):
                                            echo "disabled" ?>" <?php echo "disabled";
                                        elseif (!adminLogado()):
                                            echo "disabled" ?>" <?php echo "disabled";
                                        endif;?>
                                        type="submit"
                                        onclick="return confirm('Confirma a suspensão deste usuário?')"
                                        formaction="usuario-suspender.php?id=<?=$usuario->getId()?>">
                                    <i class="fas fa-minus-square"></i>
                                    <span class="tooltiptext">Suspender</span>
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
    <input type="button" onclick="window.location.href='usuario-cadastro.php';" class="btn btn-success <?php if(!adminLogado()) echo "disabled" ?>" <?php if(!adminLogado()) echo "disabled" ?> value="Novo"/>
</div>
<?php include('footer.php')?>