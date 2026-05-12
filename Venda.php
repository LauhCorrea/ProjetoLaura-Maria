<?php

class Venda {

    private $livro;
    private $cliente;

    public function __construct($livro, $cliente) {

        $this->livro = $livro;
        $this->cliente = $cliente;
    }

    // FINALIZAR VENDA

    public function concretizarVenda() {

        echo "<h2>Venda realizada com sucesso!</h2>";

        $this->cliente->imprimir();

        $this->livro->imprimir();

    }

    // CANCELAR VENDA

    public function cancelarVenda() {

        echo "<h2>Venda cancelada.</h2>";
    }
}

?>