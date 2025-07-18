<?php

class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;

    public function sacar($valor)
    {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente" . PHP_EOL;
            return;
        }
        $this->saldo -= $valor;
    }

    public function depositar($valor)
    {
        if ($valor < 0) {
            echo "O valor precisa ser positivo." . PHP_EOL;
            return;
        }
        $this->saldo += $valor;
    }

    public function transferir(float $valor, Conta $contaDestino)
    {
        if ($valor > $this->saldo) {
            echo "Saldo insulticiente." . PHP_EOL;
            return;
        }
        $this->sacar($valor);
        $contaDestino->depositar($valor);
    }
}

$conta = new Conta();

$conta->cpfTitular = '123.456.789-10';
$conta->nomeTitular = "Clebinho Furacao";
$conta->saldo = 0;

// $conta->sacar(200);

// $conta->depositar(200);

$conta->depositar(200);
$conta->sacar(50);


var_dump($conta);

$conta2 = new Conta();

var_dump($conta2);

$conta->transferir(50, $conta2);

var_dump($conta);
var_dump($conta2);
