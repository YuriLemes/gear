<?php
    include('header.php');
    require_once('ServicoBO.php');
    $servicos = ServicoBO::findAll();
    include('exibir-erro.php');
?>

<div class="container">
    <h1>Portifólio de Serviços</h1>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Descrição Resumida</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($servicos as $servico):?>
                    <tr>
                        <td><?=strtoupper($servico->getDescricaoResumida())?></td>
                        <td>
                            <form action="#" method="post">
                                <button class="tooltip btn btn-info" type="submit" formaction="servico-form-visualizacao.php?id=<?=$servico->getId()?>">
                                    <i class="fas fa-eye"></i>
                                    <span class="tooltiptext">Visualizar</span>
                                </button>
                                <button class="tooltip btn btn-primary <?php if(!adminLogado()): echo "disabled" ?>" <?php echo "disabled"; endif;?> type="submit" formaction="servico-form-alteracao.php?id=<?=$servico->getId()?>">
                                    <i class="fas fa-pencil-alt"></i>
                                    <span class="tooltiptext">Alterar</span>
                                </button>
                                <button class="tooltip btn btn-danger
                                <?php
                                    if(!adminLogado())
                                        echo "disabled" ?>" <?php
                                    if(!adminLogado())
                                        echo "disabled" ?>
                                    type="submit" onclick="return confirm('Confirma remover este serviço?')"
                                    formaction="servico-acao-remover.php?id=<?=$servico->getId()?>">
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
    <input type="button" onclick="window.location.href='servico-form-cadastro.php';" class="btn btn-success <?php if(!adminLogado()) echo "disabled" ?>" <?php if(!adminLogado()) echo "disabled" ?> value="Novo" />
</div>
<?php include('footer.php')?>
