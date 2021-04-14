<?php

$contasCorrentes = [
    123456789 => [
        'titular' => 'Matheus',
        'saldo' => 1000
    ],
    132345445 => [
        'titular' => 'Vinicius',
        'saldo' => 4000
    ],
    256657676 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

    foreach ($contasCorrentes as $cpf => $conta) {
        echo $cpf . PHP_EOL;
    }

?>