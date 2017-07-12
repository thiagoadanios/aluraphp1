<?php include("header.php"); 
	  include("conexao.php");
?>

<h1>Formulario de Produto</h1>

<?php 
	$action =  isset($_GET['editar']) ? 'editar-produto.php' : 'add-produto.php' ;
	if (isset($_GET['editar'])) {
		$query = "select * from produtos where id = {$_GET['id']}";
		$result = mysqli_query($conexao, $query);
		$produto = mysqli_fetch_assoc($result);
	}


?>

<form action="<?=$action;?>">
	
	<div class="form-group">
		
	<table class="table table-responsive">
	<?php if (isset($_GET['editar'])) :?>
		<tr> <td colspan="2"><input class="form-control" type="text" 
		value="<?=isset($produto) ? $produto['id'] : '' ?>" name="nome" placeholder="ID..." readonly="true" > </td></tr>
	<?php endif; ?>
		<tr> <td colspan="2"><input class="form-control" type="text" 
		value="<?=isset($produto) ? $produto['nome']: '' ?>" name="nome" placeholder="Nome..."> </td></tr>
		<tr> <td colspan="2"><input class="form-control" type="text" 
		value="<?=isset($produto) ? $produto['preco']: '' ?>" name="preco" placeholder="Preço..."></td></tr>
		<tr>	
			<td><input class="btn btn-danger" style="float: right; width: 100%;" type="reset" value="Limpar" ></td>
			<td><input class="btn btn-primary" style="float: right; width: 100%;" type="submit" value="cadastrar"></td>
		</tr>
	</table>
</div>


</form>

<?php include("footer.php"); ?>