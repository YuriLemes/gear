<?php include('header.php');?>
<div class="containerprincipal">
	<h5>Cadastro de Serviço</h5>
	<form method="post" class="form-inline" role="form" action="servico-acao-cadastrar" id="form-servico">
		<div class="containerg">
			<fieldset>
				<div class="form-group">
					<label>ID:</label>
					<input   required maxlength="5" type="text" class="form-control" name="id" id="id" disabled >
				</div>
				<div class="form-group">
					<label for="servico">Descrição Resumida:</label>
					<input type="text" name="cservico" id="servico" class="form-control"  required maxlength="25" />
					<span class="error">
						*
					</span>
				</div>
				<div class="form-group">
					<label for="descricao">Descrição Detalhada:</label>
					<textarea name="tdesc" id="cdesc" cols="45" rows="5"  maxlength="250"></textarea>
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
				<button type="submit" class="btn btn-success" id="btn-salvar">
					<span>
						<i class="far fa-save"></i> Salvar
					</span>
				</button>
				<button type="button" class="btn btn-danger" id="btn-cancelar" onclick="cancelar()">
					<span>
						<i class="fas fa-times"></i> Cancelar
					</span>
				</button>
			</fieldset>
		</div>
	</form>
</div>
	<?php include('footer.php')?>