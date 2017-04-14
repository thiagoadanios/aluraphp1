<?php include("header.php"); ?>

<h1>Formulario de Produto</h1>

<form action="add-produto.php">

    <div class="form-group">

        <input class="form-control" type="text" name="nome" placeholder="Nome...">
        <label></label>
        <input class="form-control" type="preco" name="preco" placeholder="Preço...">

    </div>

    <input class="btn btn-primary" type="submit" value="cadastrar">
</form>

<?php include("footer.php"); ?>
