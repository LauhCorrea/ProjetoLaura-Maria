<?php
    class Venda{
        private $livros; //Array com objetos da classe 
        private $preco; 
        private $cliente;
       
        
        //MÉTODOS (PÚBLICOS)
        public function getLivros(){
            return $this->livros;
        }

        public function setLivros($livros){
            $this->livros = $livros;
        }
        public function getPreco(){
            return $this->preco;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }
        public function getCliente(){
            return $this->cliente;
        }

        public function setCliente($cliente){
            $this->cliente = $cliente;
        }

        //MÉTODO PARA CALCULAR VALOR TOTAL
        public function getValorTotal (){
            $total = $this->cliente * $this->quantidade;

            return $total;
        }
    }