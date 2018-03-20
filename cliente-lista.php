<?php include('header.php');
require_once('ServicoBO.php');
    $servicos = ServicoBO::findAll();
?>

	
<div class="container centralizar">
  <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Login</th>
                    <th>Perfil</th>
                </tr>
            </thead>
            <tbody>
   <?php foreach ($servicos as $servico):?>
                    <tr>
                        <td><?=$servico->getDescricaoResumida()?></td>
                        <td>
                            <form action="#" method="post">
                                <button class="tooltip btn btn-primary disabled" type="submit" formaction="#">
                                    <i class="fas fa-pencil-alt"></i>
                                    <span class="tooltiptext">Alterar</span>
                                </button>
                                <button class="tooltip btn btn-danger disabled" type="submit" formaction="servico-remover.php?id=<?=$servico->getId()?>">
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

    <?php include('footer.php')?>