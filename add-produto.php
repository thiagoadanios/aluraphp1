<?php
//ini_set('display_errors', 1);
include("header.php");
$nome = isset($_GET['nome']) ? $_GET['nome'] : 'valor padrão';
$preco = isset($_GET['preco']) ? $_POST['preco'] : 'valor padrão';
echo "{$nome} , {$preco}";
$query = "INSERT INTO PRODUTOS (NOME, PRECO) VALUES ('{$nome}', {$preco});";

$conexao = mysqli_connect("localhost", "root","root", "mysql");

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