<?php

class CartaoDebito implements Pagamento
{
    private int $valorLivro;
    private int $numeroCartao;

    public function __construct(int $valorLivro, int $numeroCartao)
    {
        $this->valorLivro = $valorLivro;
        $this->numeroCartao = $numeroCartao;
    }

    public function pagar($dados)
    {
        echo "Pagamento realizado no cartão de débito.";
    }

    public function aVista($dados)
    {
        echo "Pagamento à vista de R$ {$this->valorLivro}";
    }
}