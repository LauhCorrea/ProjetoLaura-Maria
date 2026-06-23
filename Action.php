<?php

require "Venda.php";
require "Livro.php";
require "PessoaAnonima.php";
require "PessoaCliente.php";
require "Genero.php";
require "Pagamento.php";
require "CartaoCredito.php";
require "CartaoDebito.php";

// RECEBER DADOS DO FORMULÁRIO
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nomeCliente = $_POST['cliente'];
    $cpf = $_POST['cpf'];
    $livro = $_POST['livro'];
    $preco = $_POST['preco'];
    $genero = $_POST['genero'];

    // CRIAR OBJETO GÊNERO
    $meuGenero = new Genero($genero);

    // CRIAR OBJETO LIVRO
    $meuLivro = new Livro(
        $livro,
        "Machado de Assis",
        $preco,
        $meuGenero
    );

    // CRIAR OBJETO CLIENTE
    $meuCliente = new PessoaCliente(
        $nomeCliente,
        $cpf
    );

    // CRIAR OBJETO PAGAMENTO
    $meuPagamento = new CartaoDebito(
        $valorLivro,
         $numeroCartao
    );

    // OU
    // $meuPagamento = new CartaoCredito();

    // CRIAR VENDA
    $minhaVenda = new Venda(
        $meuLivro,
        $meuCliente,
        $meuPagamento
    );

    // EXECUTAR VENDA
    $minhaVenda->concretizarVenda();
}

?>