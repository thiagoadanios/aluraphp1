<?php
mysqli_report(MYSQLI_REPORT_STRICT);


try {

    $conexao = mysqli_connect("localhost", "root","root","loja");
  
    
} catch (mysqli_sql_exception $e ){


    if ($e->getCode() == 1045) {
        echo '<p class="alert alert-danger">Erro com a Conexão</p>';
    }

    if ($e->getCode() == 1049) {
        echo '<p class="alert alert-danger"> Banco Não Encontrado </p>';

        $conexao = mysqli_connect("localhost", "root","root","mysql");
        $query = "CREATE DATABASE loja";
        mysqli_query($conexao, $query);
        criarTabela();      
    }

    exit;
}

function criarTabela(){
    $conexao = mysqli_connect("localhost", "root","root","loja");
    $query = 'CREATE TABLE produtos (
	id int auto_increment primary key,
    nome varchar(255),
    preco double(10,2));';

    mysqli_query($conexao, $query);
}



