<?php  include("header.php");  ?>
<?php include ("conexao.php"); ?>


<?php
$nome = isset($_GET['nome']) ? $_GET['nome'] : 'valor padrão';
$preco = (isset($_GET['preco'])  && is_numeric($_GET['preco'])) ? $_GET['preco']  : 'valor padrão';

function InsereProduto($conexao, $nome, $preco)  : int {
	$query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco});";
	return mysqli_query($conexao, $query);
}

try {

	if (InsereProduto($conexao, $nome, $preco)){

?>
	
	<p class="alert alert-success"> Produto
		<?=$nome;?>, <?=$preco;?> Adicionado com Sucesso
	</p>
<?php } else { ?>

	<p class="alert alert-danger"> <?=$nome?> Produto não foi adcionado</p>

<?php
}

mysqli_close($conexao); // Não Obrigatorio
} catch (mysqli_sql_exception $e) {
	echo "deu merda";
}?>
<?php  include("footer.php");  ?>