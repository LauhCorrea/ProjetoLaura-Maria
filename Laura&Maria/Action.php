<?php
    //incluir os arquivos das classes
    require "Venda.php";
    require "Livro.php";
    require "Cliente.php";
    require "Genero.php";

    $preco = $_POST['preco'] . "<br>";
    $cliente = $_POST['cliente'];

    

    //instanciar os objetos das classes Produto, vendedor e Comprador
    $meuLivro = new Livro("Dom Casmurro", "Machado de Assis", "Romance", $preco);
    $meuCliente = new Cliente($cliente);
    $meuGenero = new Genero("Genero: Romance");
   
    //instanciar um objeto da classe venda
    $minhaVenda = new Venda($meuLivro, $meuCliente, $meuGenero);

    //concretizar uma venda
    $minhaVenda->concretizarVenda();
    //cancelar uma venda
    $minhaVenda->cancelarVenda();
    
?>