<?php

class Pessoa
{
    public function __construct(private Casa $casa)
    {
    }

    public function casa(): Casa
    {
        return $this->casa;
    }

    public function cep(): string
    {
        return $this->casa->cep();
    }
}

class Casa
{
    public function __construct(private Endereco $endereco)
    {
    }

    public function endereco(): Endereco
    {
        return $this->endereco;
    }

    public function cep():string 
    {
        return $this->endereco->cep();
    }
}

class Endereco
{
    public function __construct(private string $cep)
    {
    }

    public function cep(): string
    {
        return $this->cep;
    }
}


$endereco = new Endereco('12345-678');
$casa = new Casa($endereco);
$pessoa = new Pessoa($casa);

// echo $pessoa?->casa()?->endereco()?->cep() . PHP_EOL;

echo $pessoa?->cep() . PHP_EOL;

