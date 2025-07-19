<?php
require_once "titular.php";
class Conta
{
    private Titular $cliente;
    private float $saldo;
    private static $quantidadeDeContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {

        $this->cliente = new Titular($cpfTitular, $nomeTitular);
        $this->saldo = 0;
        // Conta::$quantidadeDeContas++;
        self::$quantidadeDeContas++;
    }

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

    public function defineSaldo($valor)
    {
        $this->saldo = $valor;
    }

    public function recuperaCpf()
    {
        return $this->cliente->recuperaCpf();
    }

    public function recuperaNome()
    {
        return $this->cliente->recuperaNome();
    }

    public function recuperaSaldo()
    {
        return $this->saldo;
    }

    public function __destruct()
    {
        self::$quantidadeDeContas--;
    }
}

$conta = new Conta("123.456.789.10", "Clebinho Furacao");

// $conta->cpfTitular = '123.456.789-10';
// $conta->nomeTitular = "Clebinho Furacao";
// $conta->saldo = 0;

// $conta->sacar(200);

// $conta->depositar(200);

$conta->depositar(200);
$conta->sacar(50);


var_dump($conta);

$conta2 = new Conta("147.258.369-10", "Rogéria Ventanias");

var_dump($conta2);

$conta->transferir(50, $conta2);

var_dump($conta);
var_dump($conta2);
