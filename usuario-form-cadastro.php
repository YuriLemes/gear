<?php 
include('header-form.php');
include('exibir-erro.php');
require ('UsuarioBO.php');
?>

<div class="containerprincipal">

	<h5>Cadastro de Usuário</h5>
	
	<form method="post" class="form-inline" role="form" action="usuario-acao-cadastrar" id="form-usuario">		

		<div class="containeri">
			<fieldset>
				<div class="form-group">
					<label for="id">ID:</label >
					<input maxlength="5" type="text" class="form-control" name="id" id="id-usuario" readonly="readonly" >
				</div>
			</div>

			<div class="containerc">
				<div class="form-group">
					<label for="cnpj">CNPJ Empresa: </label>
					<input type="text" name="ccnpj" id="cnpj" value="<?=$_SESSION['login']['cnpj_empresa']?>" readonly="readonly" placeholder="00.000.000/0000-00" class="form-control" maxlength="14" />
				</div>
			</fieldset>
		</div>

		<div class="containern">
			<fieldset>
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" name="cnome" id="nome" class="form-control"  required maxlength="60" />
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
					<input type="text" name="clogin" id="login" class="form-control"  required maxlength="10" />
					<span class="error">
						*
					</span>
				</div>

				<div class="form-group">
					<label for="perfil">Perfil:</label>
					<select id="perfil" class="form-control" required name="cperfil">
						<option selected disabled> Escolha uma opção:</option>
						<option>ADMIN</option>
						<option>USUARIO</option>
					</select>
					<span class="error">
						*
					</span>
				</div>
			</fieldset>
		</div>

		<div class="containera">
			<fieldset>
				<fieldset>
					<div class="form-group">
						<label for="senha-usuario" style="margin-left: 37px;">Senha:</label>
						<input type="password" name="csenha" id="senha-usuario" class="form-control" maxlength="5" />
					</div>

					<div class="form-group">
						<label for="ativo" style="margin-left: 35px;">Ativo:</label>
						<input type="checkbox" name="cativo" id="ativo" class="form-control" checked="checked" value="1" required/>
						<span class="error">
							*
						</span>
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
					<div class="containerb centralizar">
						<fieldset>
							<button type="submit" class="btn btn-success" id="btn-salvar">
								<span>
									<i class="far fa-save"></i> Salvar
								</span>
							</button>
						</button>
						<button  class="btn btn-danger" id="btn-cancelar" type="button" onclick="cancelar('usuario-lista')">

							<span>
								<i class="fas fa-times"></i> Cancelar
							</span>
						</button>
					</fieldset>
				</div>
			</form>
		</div>
	</div>
	<?php include('footer.php')?>