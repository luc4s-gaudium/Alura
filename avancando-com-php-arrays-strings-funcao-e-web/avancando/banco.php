<?php
// O nome desse tipo de array é "Array associativo".
// include 'funcoes.php';
// require "funcoes.php";
require_once "funcoes.php";


$contasCorrentes = [
    'cpf-1' => [
        'titular' => 'Usuário 1',
        'saldo' => 1000
    ],
    'cpf-2' => $conta2 = [
        'titular' => 'Usuário 2',
        'saldo' => 10000
    ],
    'cpf-3' => [
        'titular' => 'Usuário 3',
        'saldo' => 300
    ]
];

$contasCorrentes['cpf-1'] = sacar($contasCorrentes['cpf-1'], 200);
$contasCorrentes['cpf-2'] = depositar($contasCorrentes['cpf-2'], 25);

$contasCorrentes['cpf-3'] = titularComLetrasMaiusculas($contasCorrentes['cpf-3']);

foreach ($contasCorrentes as $cpf => $conta) {
    $mensagem = "CPF: $cpf, Titular: $conta[titular], Saldo: $conta[saldo]";
    mostraMensagem($mensagem);
}
