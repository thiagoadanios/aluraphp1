<?php include("header.php"); 
include ("conexao.php")
?>

<?php 
$id = isset($_GET['id']) ? $_GET['id'] : 'erro'; 
$query = mysqli_query($conexao, "DELETE  FROM produtos WHERE id = {$id}");

if ($query &&  $id!="erro") {

?>

<h1>Removido</h1>

<?php } else{ ?>

<h1>Não Removido </h1>

<?php
}
 include("footer.php"); ?>