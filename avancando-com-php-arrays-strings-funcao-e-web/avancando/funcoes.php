<?php
function mostraMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valor)
{
    $saldo = $conta['saldo'];
    if ($valor > $saldo) {
        echo "Sem saldo suficiente!";
    }
    $conta['saldo'] = $saldo - $valor;

    return $conta;
}

function titularComLetrasMaiusculas(array $conta)
{
    // return mb_strtoupper($conta['titular']);
    // list('titular' => $titular) = $conta; // Forma de desestruturar uma lista em PHP
    ['titular' => $titular] = $conta; // Forma ainda mais simples de desestruturar uma lista em PHP
    $conta['titular'] = mb_strtoupper($titular);
    return $conta;
}

function depositar(array $conta, float $valor)
{
    if ($valor <= 0) {
        echo "Erro! Depósitos precisam ser positivos.";
        return;
    }

    $conta['saldo'] += $valor;

    return $conta;
}
