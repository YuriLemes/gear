<?php
    include('header.php');
    require_once('ClienteBO.php');
    $clientes = ClienteBO::findAllActive();
    include('exibir-erro.php');
?>


<div class="container">
    <h1>Lista de Clientes</h1>
  <table class="table-fixed table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF/CNPJ</th>
                    <th>Data de Cadastro</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($clientes as $cliente):?>
                    <tr>
                        <td><?=strtoupper($cliente->getNome())?></td>
                        <td><?php if(strlen($cliente->cpf_cnpj) == 14): echo Mask("##.###.###/####-##", $cliente->cpf_cnpj); else: echo Mask("###.###.###-##", $cliente->cpf_cnpj); endif;?></td>
                        <td><?=date_format(date_create($cliente->data_cadastro), 'd/m/Y')?></td>
                        <td>
                            <form action="#" method="post">
                                <button class="tooltip btn btn-info" type="submit" disabled formaction="cliente-form-visualizacao.php?id=<?=$cliente->getId()?>">
                                    <i class="fas fa-eye"></i>
                                    <span class="tooltiptext">Em Desenvolvimento</span>
                                </button>
                                <button  disabled class="tooltip btn btn-primary
                                    <?php
                                        if(!adminLogado()):
                                            echo "disabled" ?>" <?php echo "disabled";
                                        endif;?> type="submit" formaction="cliente-form-alteracao.php?id=<?=$cliente->getId()?>">
                                    <i class="fas fa-pencil-alt"></i>
                                    <span class="tooltiptext">Em Desenvolvimento</span>
                                </button>
                                <button class="tooltip btn btn-danger
                                    <?php
                                        if(adminLogado()):
                                            echo "disabled" ?>" <?php echo "disabled";
                                        elseif (!adminLogado()):
                                            echo "disabled" ?>" <?php echo "disabled";
                                        endif;?>
                                        type="submit"
                                        onclick="return confirm('Confirma a suspensão deste cliente?')"
                                        formaction="cliente-acao-suspender.php?id=<?=$cliente->getId()?>">
                                    <i class="fas fa-minus-square"></i>
                                    <span class="tooltiptext">Em Desenvolvimento</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach;?>
                 </tbody>
        </table>
    </div>
</div>
<div class="container ">
    <button disabled type="button" onclick="window.location.href='cliente-form-cadastro.php';" class="btn btn-success tooltip
    <?php 
        if(!adminLogado()):
            echo"disabled";?> " <?php echo"disabled";
        else:
            ?> " 
        <?php endif;?> >Novo
        <span class="tooltiptext">Em Desenvolvimento</span>
    </button>
</div> 
<?php include('footer.php')?>