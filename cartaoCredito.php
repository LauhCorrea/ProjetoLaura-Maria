<?php

class CartaoCredito implements Pagamento
{
    private int $numeroParcelas;
    private int $numeroCartao;

    public function __construct(int $numeroParcelas, int $numeroCartao)
    {
        $this->numeroParcelas = $numeroParcelas;
        $this->numeroCartao = $numeroCartao;
    }

    public function pagar($dados)
    {
        echo "Pagamento realizado no cartão de crédito.";
    }

    public function parcelar(): int
    {
        return $this->numeroParcelas;
    }
}