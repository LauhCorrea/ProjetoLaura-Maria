<?php
    class Cliente{
        private $nome; //Array com objetos da classe 
        private $titulo; 
        
        public function __construct($nome, $titulo) {
            $this->nome = $nome;
            $this->titulo = $titulo;
           
        }

        // Métodos de encapsulamento
        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }
        
        // Método para mostrar as informações do Cliente
        public function imprimir() {
            echo "<p>Nome: " . $this->nome; "</p>";
            echo "<p>Título: " . $this->titulo; "</p>";
        
        }
    }