<?php
    require "Pagamento.php";

    class CartaoCredito implements Pagamento {

        private $numeroParcelas;
        private $numeroCartao;

        public function pagar($dados) {
            return "Pagamento realizado no crédito.";
        }

        public function parcelar() {
            return $this->numeroParcelas;
        }
    }
?>