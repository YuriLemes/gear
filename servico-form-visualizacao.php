<?php 
	include('header.php');
	require('ServicoBO.php');
	$id=$_GET['id'];
	$servico= ServicoBO::findById($id);
?>
<div class="containerprincipal">
	<h5>Alteração de Serviço</h5>
	<form method="post" class="form-inline" role="form" action="servico-acao-alterar" id="form-servico">
		<div class="containern">
			<fieldset>
				<div>
					<label>ID:</label>
					<input type="text" class="disabled" name="id" disabled value="<?= $servico->getId()?>" />
				</div>
				<div class="form-group">
					<label for="servico">Descrição Resumida:</label>
					<input type="text" name="cservico" id="servico" disabled class="form-control disabled"  required maxlength="25" value="<?= $servico->getDescricaoResumida()?>" />
					
				</div>
				<div class="form-group">
					<label for="descricao">Descrição Detalhada:</label>
					<textarea name="tdesc disabled" id="cdesc" cols="45" rows="5" disabled maxlength="250"><?= $servico->getDescricaoDetalhada()?></textarea>
				</div>
			</fieldset>
		</div>

	</form>

		<div class="containerb centralizar">
			<fieldset>
				<button type="button" class="btn btn-primary" id="btn-salvar" onclick="window.location.href='servico-form-alteracao.php?id=<?=$servico->getId()?>';">
					<span>
						<i class="fas fa-edit"></i> Alterar
					</span>
				</button>

				<button type="button" class="btn btn-danger" id="btn-cancelar" onclick="window.location.href='servico-lista';">
					<span>
						<i class="fas fa-times"></i> Cancelar
					</span>
				</button>
			</fieldset>
		</div>
	
</div>
	<?php include('footer.php')?>