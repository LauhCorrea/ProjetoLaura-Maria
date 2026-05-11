<?php
    class Form{
        private $cliente;
        private $livro;
        private $preco;

        $cliente = $_POST['cliente'];
        $livros  = $_POST['livros'];
        $preco   = $_POST['preco'];

        echo "Cliente: " . $cliente . "<br>";

        echo "Livros selecionados: <br>";

        if (!empty($livros)) {
            foreach ($livros as $livro) {
                echo $livro . "<br>";
            }
        }

        echo "Preço: " . $preco;
    }
?>