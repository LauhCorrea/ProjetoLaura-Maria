<?php
    class PessoaCliente extends PessoaAnonima {

        private $cpf;

        public function getCpf() {
            return $this->cpf;
        }

        public function setCpf($cpf) {
        $   this->cpf = $cpf;
        }
    }
?>