<?php

class Conta
{
    private float $saldo;

    public function __construct()
    {
        $this->saldo = 0;
    }

    public function getSaldo(): float|int
    {
        return $this->saldo;
    }

    public function sacar(float|int $valorSacar):  void
    {
        if ($valorSacar < 0) {
            throw new InvalidArgumentException();
        }
        if ($valorSacar > $this->saldo) {
            throw new DomainException();
        }

        $this->saldo -= $valorSacar;
    }

    public function depositar(float|int $valorDeposito): void
    {
        if ($valorDeposito < 0) {
            throw new InvalidArgumentException();
        }

        $this->saldo += $valorDeposito;
    }
}

$conta = new Conta();

$conta->depositar(1000);

$conta->sacar(350);

echo $conta->getSaldo() . PHP_EOL;