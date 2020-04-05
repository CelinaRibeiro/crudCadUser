<?php
require 'templates/template.php';
require 'db/config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $sql = "SELECT * FROM usuarios WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':id', $id);
    $sql->execute();
    
    if ($sql->rowCount() > 0) {
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: index.php");
        exit;
    }
}
?>

<section>
	<div class="centro">
	
		<form method="POST" action="editar_action.php">
		<input type="hidden" name="id" value="<?=$info['id']; ?>"/>
		
			<div class="form-group row">
				<label for="nome" class="col-sm-2 col-form-label">Nome:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nome" value="<?=$info['nome']; ?>" />
				</div>
			</div>

			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label">Email:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" value="<?=$info['email']; ?>"/>
				</div>
			</div>

			<div class="form-group row">
				<label for="email" class="col-sm-2 col-form-label"></label>
				<div class="col-sm-10">
					<input type="submit" class="btn btn-info" value="Salvar" /> 
				</div>
			</div>
		</form>
	</div>
</section>

<?php
require 'templates/footer.php';
?>
