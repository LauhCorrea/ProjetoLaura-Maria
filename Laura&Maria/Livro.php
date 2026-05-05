<?php
    class Livro{
        private $titulo; //Array com objetos da classe 
        private $autor; 
        private $preco;
        private $genero;
       
        public function __construct($titulo, $autor, $preco, $genero) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->preco = $preco;
            $this->genero = $genero;
        }

        // Métodos de encapsulamento
        public function getTitulo(){
            return $this->titulo;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function setAutor($autor) {
            $this->autor = $autor;
        }

        public function getEdicao(){
            return $this->preco;
        }

        public function setEdicao($preco) {
            $this->preco = $preco;
        }
        public function getGenero(){
            return $this->genero;
        }

        public function setGenero($genero) {
            $this->genero = $genero;
        }
        

        // Método para mostrar as informações do Livro
        public function imprimir() {
            echo "<p>Título: " . $this->titulo; "</p>";
            echo "<p>Autor: " . $this->autor; "</p>";
            echo "<p>Edição: " . $this->preco; "</p>";
            echo "<p>:Genero " . $this->genero; "</p>";
        
        }
    }