<?php include('header.php');?>
<div class="containerprincipal">
	<h5>Cadastro de Usuário</h5>
	<form method="post" class="form-inline" role="form" action="cadastrar-usuario" id="form-usuario">		
		<div class="containern">
			<fieldset>
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" name="cnome" id="nome" class="form-control"  required maxlength="60" />
				</div>
			</fieldset>
		</div>
		<div class="containera">

			<fieldset>
				<div class="form-group">
					<label for="login">Login:</label>
					<input type="text" name="clogin" id="login" class="form-control" required maxlength="10" />
				</div>
				<div class="form-group">
					<label for="perfil">Perfil:</label>
					<select id="perfil" class="form-control">
						<option selected disabled> Escolha uma opção:</option>
						<option>Administrador</option>
						<option>Funcionário</option>
					</select>
				</div>
			</fieldset>
		</div>
		<div class="containera">
			<fieldset>
				<div class="form-group">
					<label for="senha">Senha:</label>
					<input type="password" name="csenha" id="senha-usuario" class="form-control" maxlength="5" />
				</div>

				<div class="form-group">
					<label for="ativo">Ativo:</label>
					<input type="checkbox" name="cativo" id="ativo" value="Sim" class="form-control" checked />
				</div>	
			</fieldset>
		</div>	
		<div class="containerc">
			<fieldset>
				<div class="form-group">
					<label for="cnpj">CNPJ Empresa: </label>
					<input type="text" name="ccnjp" id="cnpj" value="<?=$_SESSION['login']['cnpj_empresa']?>" disabled placeholder="00.000.000/0000-00" class="form-control" maxlength="14" />
				</div>
			</fieldset>
		</div>
		<div class="containerb centralizar">
			<fieldset>
				<button type="button" class="btn btn-primary" id="btn-alterar" style="color: white;">
					<span>
						<i class="fas fa-edit"></i> Alterar
					</span>
				</button>
				<button type="submit" class="btn btn-success" id="btn-salvar">
					<span>
						<i class="far fa-save"></i> Salvar
					</span>
				</button>
				<button type="button" class="btn btn-danger" id="btn-cancelar" onclick="window.location.href='usuario-lista.php';">
					<span>
						<i class="fas fa-times"></i> Cancelar
					</span>
                </button>
			</fieldset>
		</div>
	</form>
</div>
<?php include('footer.php')?>

