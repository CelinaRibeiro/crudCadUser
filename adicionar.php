<?php
require 'templates/template.php';
?>

<section>
	<div class="centro">
	
		<form method="POST" action="adicionar_action.php">
			<div class="form-group row">
				<label for="nome" class="col-sm-2 col-form-label">Nome:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nome" />
				</div>
			</div>

			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">Email:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" />
				</div>
			</div>

			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label"></label>
				<div class="col-sm-10">
					<input type="submit" class="btn btn-info" value="Adicionar" /> <input
						type="reset" class="btn btn-info" value="Limpar" />
				</div>
			</div>
		</form>
	</div>
</section>

<?php
require 'templates/footer.php';
?>
