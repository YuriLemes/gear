<?php include('header.php');?>
<div class="container centralizar">
    <div>
        <form action="#">
            <button href="#" class="btn btn-home-central disabled" type="submit" disabled formaction="usuario-lista.php">
                <label class="btn-home-titulo">Vendas</label>
                <div>
                    <i class="fas fa-dollar-sign icone-home""></i>
                </div>
                <label>Iniciar Venda / Ordem de Serviço</label>
            </button>
            <button href="#" class="btn btn-home-central disabled" type="submit" disabled formaction="cliente-lista.php">
                <label class="btn-home-titulo">Clientes</label>
                <div>
                    <i class="fas fa-users icone-home""></i>
                </div>
                <label>Cadastrar, Alterar, Listar ou Suspender</label>
            </button>
            <button href="#" class="btn btn-home-central disabled" type="submit" disabled formaction="fornecedor-lista.php">
                <label class="btn-home-titulo">Fornecedores</label>
                <div>
                    <i class="fas fa-briefcase icone-home""></i>
                </div>
                <label>Cadastrar, Alterar, Listar ou Suspender</label>
            </button>
        </form>
    </div>
    <div >
        <form action="#">
            <button href="#" class="btn btn-home-central disabled" type="submit" disabled formaction="produto-lista.php">
                <label class="btn-home-titulo">Produtos</label>
                <div>
                    <i class="fas fa-shopping-basket icone-home"></i>
                </div>
                <label>Cadastrar, Alterar, Listar ou Suspender</label>
            </button>
            <button class="btn btn-home-central" type="submit" formaction="servico-lista.php">
                <label class="btn-home-titulo">Serviços</label>
                <div>
                    <i class="fas fa-cubes icone-home""></i>
                </div>
                <label>Visualizar Portifólio de Serviços</label>
            </button>
        </form>
    </div>
</div>
<?php include('footer.php')?>
