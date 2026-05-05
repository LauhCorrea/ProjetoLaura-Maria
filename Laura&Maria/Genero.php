<?php
    class Genero{
        private $descricao; //Array com objetos da classe 

         // Métodos de encapsulamento
        public function getDescricao(){
            return $this->descricao;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }
    }