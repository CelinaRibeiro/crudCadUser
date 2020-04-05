<?php
require 'templates/template.php';
require 'db/config.php';

$lista = [];
$sql = "SELECT * FROM usuarios";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<section>
	<div class=centro>

		<a href="adicionar.php">ADICIONAR USUÁRIO</a><br /> <br />

		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">NOME</th>
					<th scope="col">EMAIL</th>
					<th scope="col">AÇÕES</th>
				</tr>
			</thead>
			
			<?php foreach ($lista as $list): ?>
			<tbody>
				<tr>
					<th scope="row"><?php echo $list['id']; ?></th>
					<td><?php echo $list['nome']; ?></td>
					<td><?php echo $list['email']; ?></td>
					<td>	
						<a href="editar.php?id=<?= $list['id'];?>">Editar</a>
						<a href="excluir.php?id=<?= $list['id']; ?> " onclick="return confirm('Tem certeza que deseja excluir?')" >Excluir</a>
					</td>
				</tr>
			</tbody>
			<?php endforeach; ?>
		</table>

	</div>
</section>

<?php
require 'templates/footer.php';
?>


