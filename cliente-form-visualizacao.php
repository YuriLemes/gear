		<?php 
		include('header-form.php');
		require ('ClienteBO.php');
		$id=$_GET['id'];
		$servico= ClienteBO::findById($id);
		?>
		 <div class="containerprincipal">
		 	<h5>Visualização de Clientes</h5>
		 				<form method="post" class="form-inline" role="form" action="cliente-acao-cadastrar" id="form-cliente">
				<div class="containerp">

					<div class="form-group">
						<label for="id-cliente">ID: </label>
						<input type="text" name="cid" id="id-cliente" maxlength="5" readonly="readonly" disabled value="">
					</div>

					<div class="form-group">
						<label for="dtCadastro">Data Cadastro: </label>
						<input type="date" name="cdtCadatro" id="dtCadastro" disabled value="">
					</div>

					<div class="form-group">
						<label for="dtSuspenso">Data Supenso: </label>
						<input type="date" name="cdtSuspenso" id="dtSuspenso" disabled value="">
					</div>

					<div class="form-group">
						<label for="nome">Nome: </label>
						<input type="text" name="cnome" id="nome" maxlength="150" required disabled value="">
					</div>

					<div class="form-group">
						<label for="razaoSocial">Razão Social: </label>
						<input type="text" name="crazaoSocial" id="razaoSocial" maxlength="150" disabled value="">
					</div>

					<div class="form-group">
						<label for="cpf_cnpj">CPF/CNPJ: </label>
						<input type="text" name="cpf_cnpj" id="cpf_cnpj" maxlength="14" disabled value="">
					</div>

					<div class="form-group">
						<label for="ie">IE: </label>
						<input type="text" name="cie" id="ie" maxlength="30" disabled value="">
					</div>
				</div>
				<fieldset>
					<div class="form-group">
						<label for="telefone">Telefone: </label>
						<input type="text" name="ctelefone" id="telefone" maxlength="11" disabled value="">
					</div>

					<div class="form-group">
						<label for="celular">Celular: </label>
						<input type="text" name="ccelular" id="celular" maxlength="11" disabled value="">
					</div>
				</fieldset>
				<fieldset>

					<div class="form-group">
						<label for="email">E-mail: </label>
						<input type="email" name="cemail" id="email" maxlength="11" disabled value="">
					</div>
				</fieldset>
				<fieldset>

					<div class="form-group">
						<label for="observacao">Observação: </label>
						<textarea name="cobservacao" id="observacao" maxlength="250" disabled value=""></textarea>
					</div>
					<fieldset>
						<div class="containere">

							<div class="form-group">
								<label for="logadouro">Logadouro: </label>
								<input type="text" name="clogadouro" id="logadouro" maxlength="100" disabled value="">
							</div>

							<div class="form-group">
								<label for="numero">Número: </label>
								<input type="text" name="cnumero" id="numero" maxlength="5" disabled value="">
							</div>

							<div class="form-group">
								<label for="complemento">Complemento: </label>
								<input type="text" name="ccomplemento" id="complemento" maxlength="100" disabled value="">
							</div>

							<div class="form-group">
								<label for="cidade">Cidade: </label>
								<input type="text" name="ccidade" id="cidade" maxlength="9" disabled value="">
							</div>

							<div class="form-group">
								<label for="cep">CEP: </label>
								<input type="text" name="ccep" id="cep" maxlength="8" disabled value="">
							</div>

							<div class="form-group">
								<label for="estado">Estado: </label>
								<input type="text" name="cestado" id="estado" maxlength="8" disabled value="">
								
							</div>	
							<button type="button" class="btn btn-primary" id="btn-alterar" >
							<span>
								<i class="fas fa-edit"></i> Alterar
							</span>
						</button>
						<button  class="btn btn-danger" id="btn-cancelar" type="button" onclick="cancelar('cliente-lista')">
							<span>
								<i class="fas fa-times"></i> Voltar
							</span>
						</button>
						</div>
				</fieldset>
			</fieldset>
			</form>
		 </div>
		<?php include('footer.php')?>
