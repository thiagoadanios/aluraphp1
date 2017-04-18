<?php
include("header.php");

$nome = $_GET["nome"];
$preco = $_GET["preco"];
$query = "INSERT INTO PRODUTOS (NOME, PRECO) VALUES ('{$nome}', {$preco});";
$conexao = mysqli_connect("localhost", "root","root", "loja");

	if (mysqli_query($conexao, $query)){

?>

<p class="alert-success"> Produto
	<?=$nome;?>, <?=$preco;?> Adicionado com Sucesso
</p>
<?php } else { ?>
<p class="alert-danger"> <?=$nome?> Produto não foi adcionado</p>

<?php
}

mysqli_close($conexao); // Não Obrigatorio
include("footer.php");
?>