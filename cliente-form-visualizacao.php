<?php 
include('header-form.php');
require ('ClienteBO.php');
$id=$_GET['id'];
$servico= ClienteBO::findById($id);
?>
<div class="containerprincipal">
	<h5>Visualização de Clientes</h5>
		<form method="post" class="form-inline" role="form" action="#" id="form-cliente">	
		
		<div class="#">
		<div class="form-group">
				<label for="id-cliente">ID: </label>
				<input type="text" name="cid" id="id-cliente" maxlength="5" readonly="readonly"disabled value="<?= $servico->getId()?>" >
			</div>

			<div class="form-group">
				<label for="dtCadastro">Data Cadastro: </label>
				<input type="date" name="cdtCadatro" id="dtCadastro" disabled value="<?$cliente->getDataCadastro()?>" >
			</div>

			<div class="form-group">
				<label for="dtSuspenso">Data Supenso: </label>
				<input type="date" name="cdtSuspenso" id="dtSuspenso"disabled value >
			</div>
			<div class="form-group">
				<label for="nome">Nome: </label>
				<input type="text" name="cnome" id="nome" maxlength="150" disabled value>
			</div>

			<div class="form-group">
				<label for="razaoSocial">Razão Social: </label>
				<input type="text" name="crazaoSocial" id="razaoSocial" maxlength="150" disabled value=>
			</div>

			<div class="form-group">
				<label for="cpf_cnpj">CPF/CNPJ: </label>
				<input type="text" name="cpf_cnpj" id="cpf_cnpj" maxlength="14" disabled value>
			</div>

			<div class="form-group">
				<label for="ie">IE: </label>
				<input type="text" name="cie" id="ie" maxlength="30">
			</div>

			<div class="form-group">
				<label for="telefone">Telefone: </label>
				<input type="text" name="ctelefone" id="telefone" maxlength="11">
			</div>

			<div class="form-group">
				<label for="celular">Celular: </label>
				<input type="text" name="ccelular" id="celular" maxlength="11">
			</div>
			<div class="form-group">
				<label for="email">E-mail: </label>
				<input type="email" name="cemail" id="email" maxlength="11">
			</div>
			<div class="form-group">
				<label for="observacao">Observação: </label>
				<textarea name="cobservacao" id="observacao" maxlength="250"></textarea>
			</div>
			<div class="form-group">
				<label for="logadouro">Logadouro: </label>
				<input type="text" name="clogadouro" id="logadouro" maxlength="100">
			</div>
			<div class="form-group">
				<label for="numero">Número: </label>
				<input type="text" name="cnumero" id="numero" maxlength="5">
			</div>
			<div class="form-group">
				<label for="complemento">Complemento: </label>
				<input type="text" name="ccomplemento" id="complemento" maxlength="100">
			</div>
			<div class="form-group">
				<label for="cidade">Cidade: </label>
				<input type="text" name="ccidade" id="cidade" maxlength="9">
			</div>
			<div class="form-group">
				<label for="cep">CEP: </label>
				<input type="text" name="ccep" id="cep" maxlength="8">
			</div>
			<div class="form-group">
				<label for="estado">Estado: </label>
				<input type="text" name="cestado">
			</div>

		</div>	
		
		<div class="containerb centralizar">
			<fieldset>
				<button type="button" class="btn btn-primary" id="btn-salvar">
					<span>
						<i class="far fa-edit"></i> Alterar
					</span>
				</button>

				<button type="button" class="btn btn-danger" id="btn-cancelar" >
					<span>
						<i class="fas fa-times"></i> Cancelar
					</span>
				</button>
			</fieldset>
		</div>
	</form>
</div>
		<?php include('footer.php')?>
