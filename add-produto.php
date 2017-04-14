<?php 
include("header.php");			

	//		if (empty($_GET["nome"]) or empty($_GET["preco"])) {
	//			$preco = "null";
	//			$nome = "null";
	//		} else {
				$nome = $_GET["nome"];
				$preco = $_GET["preco"];
	//		}
$query = "INSERT INTO PRODUTOS (NOME, PRECO) VALUES ('{$nome}', {$preco});";
$conexao = mysqli_connect("localhost", "root","", "loja");

if (mysqli_query($conexao, $query)){

?>

<p class="alert-success"> Produto
    <?=$nome;?>,
        <?=$preco;?> Adicionado com Sucesso
</p>
<?php } else {
?>
<p class="alert-danger"> Produto não foi adcionado</p>
<?php
}
mysqli_close($conexao); // Não Obrigatorio 

include("footer.php"); ?>
