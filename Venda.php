<?php

class Venda {

    private $livro;
    private $cliente;
    private $pagamento;

    public function __construct($livro, $cliente, Pagamento $pagamento) {

        $this->livro = $livro;
        $this->cliente = $cliente;
        $this->pagamento = $pagamento;
    }

    public function concretizarVenda() {

        echo "<h2>Venda realizada com sucesso!</h2>";

        $this->cliente->imprimir();

        $this->livro->imprimir();

        $this->pagamento->pagar($this->livro->getPreco());
    }

    public function cancelarVenda() {

        echo "<h2>Venda cancelada.</h2>";
    }
}