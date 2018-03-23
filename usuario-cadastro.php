<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script defer src="js/fontawesome-all.js"></script>
</head>
<body>
	
	<div class="containerprincipal">
		<h5>Cadastro de Usuário</h5>
		<form method="post" class="form-inline" role="form" action="usuario-cadastrar.php">
			
<div class="containern">
				<fieldset>
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" name="cnome" id="nome" class="form-control"  required maxlength="60" />
					</div>
				</fieldset>
			
</div>
			<div class="container">

				<fieldset>
					<div class="form-group">
						<label for="login">Login:</label>
						<input type="text" name="clogin" id="login" class="form-control" required maxlength="10" />
					</div>
					<div class="form-group">
						<label for="senha">Senha:</label>
						<input type="password" name="csenha" id="senha" class="form-control" maxlength="5" />
					</div>
				</fieldset>
			</div>


			<div class="container">
				<fieldset>
					<div class="form-group">
						<label for="perfil">Perfil:</label>
						<select id="perfil" class="form-control">
							<option selected disabled> Escolha uma opção:</option>
							<option>Administrador</option>
							<option>Funcionário</option>
						</select>
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
						<input type="text" name="ccnjp" id="cnpj" disabled placeholder="00.000.000/0000-00" class="form-control" maxlength="14" />
					</div>
				</fieldset>
		
</div>

<div class="containerb">
			<fieldset class="centralizar">
				<div class="btn-group-md">
					
					<button type="button" class="btn btn-warning">Alterar
						<div>
							<i class="fas fa-edit"></i>
						</div>
					</button>
					<button type="button" class="btn btn-danger">Cancelar
						<div>
							<i class="fas fa-times"></i>
						</div>
					</button>
					<button type="submit" class="btn btn-success">Salvar
						<div>
							<i class="far fa-save"></i>
						</div>
					</button>
				</div>
			</div>
			</fieldset>
		</form>
	</div>
</body>

</html>
