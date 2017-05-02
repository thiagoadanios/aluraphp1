<?php include("header.php"); ?>

<h1>Formulario de Produto</h1>

<form action="add-produto.php">
	
	<div class="form-group">
		
	<table class="table table-responsive">
		<tr> <td colspan="2"><input class="form-control" type="text" name="nome" placeholder="Nome..."> </td></tr>
		<tr> <td colspan="2"><input class="form-control" type="text" name="preco" placeholder="Preço..."></td></tr>
		<tr>	
			<td><input class="btn btn-danger" style="float: right; width: 100%;" type="reset" value="Limpar" ></td>
			<td><input class="btn btn-primary" style="float: right; width: 100%;" type="submit" value="cadastrar"></td>
		</tr>
	</table>
</div>


</form>

<?php include("footer.php"); ?>