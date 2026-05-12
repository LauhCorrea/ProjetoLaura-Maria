<?php

class Livro {

    private $titulo;
    private $autor;
    private $preco;
    private $genero;

    public function __construct($titulo, $autor, $preco, $genero) {

        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->preco = $preco;
        $this->genero = $genero;
    }

    // GETTERS E SETTERS

    public function getTitulo() {

        return $this->titulo;
    }

    public function setTitulo($titulo) {

        $this->titulo = $titulo;
    }

    public function getAutor() {

        return $this->autor;
    }

    public function setAutor($autor) {

        $this->autor = $autor;
    }

    public function getPreco() {

        return $this->preco;
    }

    public function setPreco($preco) {

        $this->preco = $preco;
    }

    public function getGenero() {

        return $this->genero;
    }

    public function setGenero($genero) {

        $this->genero = $genero;
    }

    // MOSTRAR DADOS

    public function imprimir() {

        echo "<p>Autor: " . $this->autor . "</p>";

        echo "<p>Preço: R$ " . $this->preco . "</p>";

        echo "<p>Genero:  " . $this->genero->getDescricao() . "</p>";


    }
}

?>