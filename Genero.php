<?php

class Genero {

    private $descricao;

    public function __construct($descricao) {

        $this->descricao = $descricao;
    }

    // GETTERS E SETTERS

    public function getDescricao() {

        return $this->descricao;
    }

    public function setDescricao($descricao) {

        $this->descricao = $descricao;
    }

    // MOSTRAR DADOS

    public function imprimir() {

        echo "<p>Gênero: " . $this->descricao . "</p>";
    }
}

?>