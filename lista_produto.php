<?php include ("header.php"); ?>
<?php include ("conexao.php") ;
$result = mysqli_query($conexao, "select * from produtos");
?>

<content  class="container">
	<h1>Lista de Produtos</h1>
	<table class="table table-striped table-bordered">
		<thead class="thead">
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>Ações</th>
		</tr>
		</thead>
			<tbody>
			<?php  while($produto = mysqli_fetch_assoc($result)) { ?>
				<tr>
					<th><?= $produto['id'] ?></th>
					<td><?= $produto['nome'] ?></td>
					<td>R$: <?= $produto['preco'] ?></td>
					<td style="padding-left: 15px">
						<a href="remover.php?id=<?= $produto['id'] ?>"><span class="glyphicon glyphicon-remove" alt="ola"></span></a>
						<span class="glyphicon glyphicon-edit"></span>
					</td>
				</tr>
			<?php } ?>
			</tbody>
	</table>
</content>

<?php include ("footer.php"); ?>