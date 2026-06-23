<?php

class PessoaCliente extends PessoaAnonima
{
    private int $cpf;

    public function __construct(string $nome, int $cpf)
    {
        parent::__construct($nome);
        $this->cpf = $cpf;
    }

    public function getCpf(): int
    {
        return $this->cpf;
    }

    public function setCpf(int $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function imprimir(): void
    {
        echo "Nome: {$this->nome}<br>";
        echo "CPF: {$this->cpf}";
    }
}