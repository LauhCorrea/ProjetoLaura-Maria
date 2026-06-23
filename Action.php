<?php

require "Venda.php";
require "Livro.php";
require "PessoaAnonima.php";
require "PessoaCliente.php";
require "Genero.php";
require "Pagamento.php";
require "CartaoCredito.php";
require "CartaoDebito.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $tipoCliente = $_POST['tipoCliente'];

    $nomeCliente = $_POST['cliente'];
    $livro = $_POST['livro'];
    $preco = (int) $_POST['preco'];
    $genero = $_POST['genero'];

    $tipoPagamento = $_POST['pagamento'];
    $numeroCartao = (int) $_POST['numeroCartao'];

    // GÊNERO
    $meuGenero = new Genero($genero);

    // LIVRO
    $meuLivro = new Livro(
        $livro,
        "Machado de Assis",
        $preco,
        $meuGenero
    );

    // CLIENTE
    if ($tipoCliente == "cliente") {

        $cpf = (int) $_POST['cpf'];

        $meuCliente = new PessoaCliente(
            $nomeCliente,
            $cpf
        );

    } else {

        $meuCliente = new PessoaAnonima(
            $nomeCliente
        );

    }

    // PAGAMENTO
    if ($tipoPagamento == "credito") {

        $numeroParcelas = (int) $_POST['numeroParcelas'];

        $meuPagamento = new CartaoCredito(
            $numeroParcelas,
            $numeroCartao
        );

    } else {

        $meuPagamento = new CartaoDebito(
            $preco,
            $numeroCartao
        );

    }

    // VENDA
    $minhaVenda = new Venda(
        $meuLivro,
        $meuCliente,
        $meuPagamento
    );

    $minhaVenda->concretizarVenda();
}

?>