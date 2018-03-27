<?php include('header.php');?>
<div class="containerprincipal">
	<h5>Cadastro de Serviço</h5>
	<form method="post" class="form-inline" role="form" action="cadastrar-servico" id="form-servico">
		<div class="containern">
			<fieldset>
				<div>
					<label for="servico">Serviço:</label>
					<input type="text" name="cservico" id="servico" class="form-control" required maxlength="25" />
					<span class="error">
						*
					</span>
				</div>
				<div>
					<label for="descricao">Descrição:</label>
					<textarea name="tdesc" id="cdesc" cols="45" rows="5"></textarea>
				</div>
			</fieldset>
		</div>
	</form>
	<p>
			<span class="error"> 
				
			</span><font>
					*Campos Obrigatórios
				</font>
		</p>
		<div class="containerb centralizar">
			<fieldset>
				<button type="button" class="btn btn-primary" id="btn-alterar" ">
					<span>
						<i class="fas fa-edit"></i> Alterar
					</span>
				</button>
				<button type="submit" class="btn btn-success" id="btn-salvar">
					<span>
						<i class="far fa-save"></i> Salvar
					</span>
				</button>
				<button type="button" class="btn btn-danger" id="btn-cancelar" onclick="window.location.href='servico-lista.php';">
					<span>
						<i class="fas fa-times"></i> Cancelar
					</span>
				</button>
			</fieldset>
		</div>
	</form>
</div>
	<?php include('footer.php')?>