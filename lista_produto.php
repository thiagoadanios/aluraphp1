<?php include ("header.php"); ?>
<?php include ("conexao.php") ;
if(!$conexao){

echo "erro, sabão";
} else {

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
		</tr>
		</thead>
			<tbody>
			<?php  while($produto = mysqli_fetch_assoc($result)) { ?>
				<tr>
					<th><?= $produto['id'] ?></th>
					<td><?= $produto['nome'] ?></td>
					<td><?= $produto['preco'] ?></td>
				</tr>
			<?php } ?>
			</tbody>
	</table>
</content>

<?php } include ("footer.php"); ?>