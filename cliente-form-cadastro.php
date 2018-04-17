<?php 
include('header-form.php');
require ('ClienteBO.php');
?>
<div class="containercliente">

	<h3>Cadastro de Clientes</h3>
	
	<form method="post" class="form-inline" role="form" action="cliente-acao-cadastrar" id="form-cliente">

		<div class="form-group">
			<label for="id-cliente">ID: </label>
			<input type="text" name="cid" id="id-cliente" maxlength="5" readonly="readonly">
		</div>

		<div class="form-group">
			<label for="dtCadastro">Data Cadastro: </label>
			<input type="date" name="cdtCadatro" id="dtCadastro">
		</div>

		<div class="form-group">
			<label for="dtSuspenso">Data Supenso: </label>
			<input type="date" name="cdtSuspenso" id="dtSuspenso">
		</div>

		<div class="form-group">
			<label for="nome">Nome: </label>
			<input type="text" name="cnome" id="nome" maxlength="150" required>
		</div>

		<div class="form-group">
			<label for="razaoSocial">Razão Social: </label>
			<input type="text" name="crazaoSocial" id="razaoSocial" maxlength="150">
		</div>

		<div class="form-group">
			<label for="cpf_cnpj">CPF/CNPJ: </label>
			<input type="text" name="cpf_cnpj" id="cpf_cnpj" maxlength="14">
		</div>

		<div class="form-group">
			<label for="ie">IE: </label>
			<input type="text" name="cie" id="ie" maxlength="30">
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
			<select name="cestado" id="estado" >
				<option>AC</option>
				<option>AL</option>
				<option>AP</option>
				<option>AM</option>
				<option>BA</option>
				<option>CE</option>
				<option>DF</option>
				<option>ES</option>
				<option selected>GO</option>
				<option>MA</option>
				<option>MT</option>
				<option>MS</option>
				<option>MG</option>
				<option>PA</option>
				<option>PB</option>
				<option>PR</option>
				<option>PE</option>
				<option>PI</option>
				<option>RJ</option>
				<option>RN</option>
				<option>RS</option>
				<option>RO</option>
				<option>RR</option>
				<option>SC</option>
				<option>SP</option>
				<option>SE</option>
				<option>TO</option>
			</select>
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
		<fieldset>
			<button type="button" class="btn btn-primary" id="btn-alterar" >
				<span>
					<i class="fas fa-edit"></i> Alterar
				</span>
			</button>
			<button type="submit" class="btn btn-success" id="btn-salvar">
				<span>
					<i class="far fa-save"></i> Salvar
				</span>
			</button>
			<button  class="btn btn-danger" id="btn-suspender" type="button" >
				<span>
					<i class="fas fa-minus-square"></i> Suspender
				</span>
			</button>
			<button  class="btn btn-danger" id="btn-cancelar" type="button" onclick="cancelar('cliente-lista')">
				<span>
					<i class="fas fa-times"></i> Cancelar
				</span>
			</button>
		</fieldset>

	</form>	
	<?php include('footer.php')?>