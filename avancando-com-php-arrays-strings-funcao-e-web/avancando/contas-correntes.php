<?php
// O nome desse tipo de array é "Array associativo".
$conta1 = [
    'titular' => 'Usuário 1',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Usuário 2',
    'saldo' => 10000
];
$conta3 = [
    'titular' => 'Usuário 3',
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
