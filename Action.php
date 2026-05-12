<?php

require "Venda.php";
require "Livro.php";
require "Cliente.php";
require "Genero.php";

// RECEBER DADOS DO FORMULÁRIO
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $cliente = $_POST['cliente'];
    $livro = $_POST['livro'];
    $preco = $_POST['preco'];
    $genero = $_POST['genero'];
}

// CRIAR OBJETOS
$meuGenero = new Genero(
    $genero,
    "Romance"
);

$meuLivro = new Livro(
    $livro,
    "Machado de Assis",
    $preco,
    $meuGenero
    
);

$meuCliente = new Cliente(
    $cliente,
    $livro
);


// CRIAR VENDA

$minhaVenda = new Venda(
    $meuLivro,
    $meuCliente,
    $meuGenero
);

// EXECUTAR VENDA

$minhaVenda->concretizarVenda();

?>