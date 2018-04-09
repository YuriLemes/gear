<?php 
include('header.php');
require ('UsuarioBO.php');
$id = $_GET['id'];
$usuario= UsuarioBO::findById($id);

?>
<div class="containerprincipal">
	<h5>Visualização de Usuário</h5>
	
	<form method="post" class="form-inline" role="form" action="alterar-usuario.php" id="form-usuario">		
		<div class="containern">
			<fieldset>
				<div class="form-group">
					<label >ID:</label>
					<input   required maxlength="25" type="text" class="form-control" name="id" readonly="readonly"> value="<?= $usuario->getId()?>" />
				</div >
			<fieldset>
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" name="cnome" id="nome" class="form-control"  required maxlength="60" readonly="readonly" value="<?= $usuario->getNome()?>" />
					<span class="error">
						*
					</span>
				</div>
			</fieldset>
		</div>
		<div class="containera">

			<fieldset>
				<div class="form-group">
					<label for="login">Login:</label>
					<input type="text" name="clogin" id="login" class="form-control" required maxlength="10" 
					readonly="readonly" value="><?= $usuario->getLogin()?>"/>
					<span class="error">
						*
					</span>
				</div>
				<div class="form-group">
					<label for="perfil">Perfil:</label>
					<select id="perfil" class="form-control" required name="cperfil" readonly="readonly" value="<?= $usuario->getPerfil()?>">
						<option selected disabled> Escolha uma opção:</option>
						<option>Administrador</option>
						<option>Funcionário</option>
					</select>
					<span class="error">
						*
					</span>
				</div>
			</fieldset>
		</div>
		<div class="containera">
			<fieldset>
				<div class="form-group">
					<label for="senha" style="margin-left: 37px;">Senha:</label>
					<input type="password" name="csenha" id="senha-usuario" class="form-control" maxlength="5" readonly="readonly" value="<?= 
					$usuario->getSenha()?>" />
				</div>

				<div class="form-group">
					<label for="ativo" style="margin-left: 35px;">Ativo:</label>
					<input type="checkbox" name="cativo" id="ativo" class="form-control" checked="checked" readonly="readonly" value="<?= $usuario->getAtivo()?>" />
					<span class="error">
						*
					</span>
				</div>

			</fieldset>
		</div>	
		<div class="containerc">
			<fieldset>
				<div class="form-group">
					<label for="cnpj">CNPJ Empresa: </label>
					<input type="text" name="ccnjp" id="cnpj" value="<?=$_SESSION['login']['cnpj_empresa']?>" readonly="readonly" placeholder="00.000.000/0000-00" class="form-control" maxlength="14" />
				</div>
			</fieldset>
		</div>
		<p>
			<span class="error"> 
				<font>
					*Campos Obrigatórios
				</font>
			</span>
		</p>
		<div class="containerb centralizar">
			<fieldset>
				<button type="button" class="btn btn-primary" id="btn-alterar" onclick="window.location.href='usuario-form-alteracao.php'">
					<span>
						<i class="fas fa-edit"></i> Alterar
					</span>
				</button>
				<button type="submit" class="btn btn-success" id="btn-salvar" disabled>
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


