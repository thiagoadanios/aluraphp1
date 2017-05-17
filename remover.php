<?php include("header.php"); 
include ("conexao.php")
?>

<?php 
$id = isset($_GET['id']) ? $_GET['id'] : 'erro'; 
$query = mysqli_query($conexao, "DELETE  FROM produtos WHERE id = {$id}");

if ($query &&  $id!="erro") {
?>

<div class="alert alert-success">
<p>Produto Removido com Sucesso</p>
<div>

<?php } else{ ?>

<p class="alert alert-danger"> Produto Não removido <?= mysqli_errno($conexao); ?> </p>

<?php
}
 include("footer.php"); ?>