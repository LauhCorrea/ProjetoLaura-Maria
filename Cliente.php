<?php

class Cliente {

    private $nome;
    private $titulo;

    public function __construct($nome, $titulo) {

        $this->nome = $nome;
        $this->titulo = $titulo;
    }

    // GETTERS E SETTERS

    public function getNome() {

        return $this->nome;
    }

    public function setNome($nome) {

        $this->nome = $nome;
    }

    public function getTitulo() {

        return $this->titulo;
    }

    public function setTitulo($titulo) {

        $this->titulo = $titulo;
    }

    // MOSTRAR DADOS

    public function imprimir() {

        echo "<p>Nome: " . $this->nome . "</p>";

        echo "<p>Título: " . $this->titulo . "</p>";
    }
}

?>