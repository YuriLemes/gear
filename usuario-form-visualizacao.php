<?php 
include('header.php');
require ('UsuarioBO.php');
$id = $_GET['id'];
$usuario= UsuarioBO::findById($id);

?>
<div class="containerprincipal">

	<h5>Visualização de Usuário</h5>
	
	<form method="post" class="form-inline" role="form" action="alterar-usuario.php" id="form-usuario">		

		<div class="containerc">
			<fieldset>
				<div class="form-group">
					<label for="id">ID:</label >
					<input   required maxlength="5" type="text" class="form-control" name="id" id="id-usuario" readonly="readonly" value="<?= $usuario->getID()?>">
				</div>
			</div>

			<div class="containerc" style="padding-left: 69px;">
				<div class="form-group">
					<label for="cnpj">CNPJ Empresa: </label>
					<input type="text" name="ccnpj" id="cnpj" value="<?=$_SESSION['login']['cnpj_empresa']?>" readonly="readonly" placeholder="00.000.000/0000-00" class="form-control" maxlength="14" />
				</div>
			</fieldset>
		</div>

		<div class="containern">
			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" name="cnome" id="nome" class="form-control"  required maxlength="60" disabled value="<?= $usuario->getNome()?>" required />
			</div>
		</fieldset>
	</div>

	<div class="containera">
		<fieldset>
			<div class="form-group">
				<label for="login">Login:</label>
				<input type="text" name="clogin" id="login" class="form-control" required maxlength="10" 
				disabled value=" <?= $usuario->getLogin()?>"/>
			</div>
			<div class="form-group">
				<label for="perfil">Perfil:</label>
				<select id="perfil" class="form-control" required name="cperfil"  disabled>
					<option selected ><?= $usuario->getPerfil()?></option>
				</select>
			</div>
		</fieldset>
	</div>
	
	<div class="containera">
		<fieldset>
			<div class="form-group">
				<label for="senha" style="margin-left: 37px;">Senha:</label>
				<input type="password" name="csenha" id="senha-usuario" class="form-control" maxlength="5" disabled value="<?= 
				$usuario->getSenha()?>" />
			</div>
			<div class="form-group">
				<label for="ativo" style="margin-left: 35px;">Ativo:</label>
				<input type="checkbox" name="cativo" id="ativo" class="form-control" <?php if($usuario->getAtivo() == 1) echo "checked"; ?>
				disabled/>
				
			</div>

		</fieldset>
	</div>	
	<div class="containerb centralizar" style="padding-top: 40px;">
		<fieldset>
			<button class="btn btn-primary" id="btn-alterar"    <?php
			if(!adminLogado() && $_SESSION['login']['usuario'] != $usuario->getLogin()):
				echo "disabled" ?>" <?php echo "disabled";
				endif;?> type="submit" formaction="usuario-form-alteracao.php?id=<?=$usuario->getId()?>">
				<span>
					<i class="fas fa-edit"></i> Alterar
				</span>
			</button>
			<button type="button" class="btn btn-success" id="btn-salvar" disabled>
				<span>
					<i class="far fa-save"></i> Salvar
				</span>
			</button>
			<button  class="btn btn-danger" id="btn-cancelar" type="submit"
			onclick="return confirm('Deseja cancelar a operação?')"
			formaction="usuario-lista.php">
			<span>
				<i class="fas fa-times"></i> Cancelar
			</span>
		</button>
	</fieldset>
</div>
</form>
</div>
<?php include('footer.php')?>


