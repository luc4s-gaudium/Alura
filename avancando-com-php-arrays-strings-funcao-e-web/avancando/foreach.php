<?php
// O nome desse tipo de array é "Array associativo".
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

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}
