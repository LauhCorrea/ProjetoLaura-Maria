<?php
    require "Pagamento.php";

    class CartaoDebito implements Pagamento {

        private $valorLivro;
        private $numeroCartao;

        public function pagar($dados) {
            return "Pagamento realizado no débito.";
        }

        public function aVista() {
            return "Pagamento à vista.";
        }
    }
?>