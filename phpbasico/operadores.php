<?php

    $nome = 10;
    $nome2 = '10';

    //O sinal = significa que estamos atribuindo um valor.
    //Ele sempre retorna verdadeiro.

    if ($nome = $nome2) {
        echo 'verdade';
    }

    //O sinal == se os valores são iguais.
    if ($nome == $nome2) {
        echo 'valores iguais';
    }

    // O sinal != significa que está conferindo se os valores são diferentes.
    if ($nome != $nome2) {
        echo 'É diferente';
    }

    // O Sinal === confere se os valores são idênticos. (mesmo valor e mesmo tipo)
    if ($nome === $nome2) {
        echo 'Os valores não são idênticos.';
    }
?>