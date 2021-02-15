<?php

    $num1 = 10;
    $num2 = '10';

    //Operadores matemáticos

    // < Menor
    if ($num1 < $num2) {
        echo 'O número é menor';
    } else {
        echo 'O número é maior';
    }

    // <= Menor ou igual
    if ($num1 <= $num2) {
        echo 'execute tal coisa';
    } else {
        echo 'senão execute isso';
    }

    // > Maior
    if ($num1 > $num2) {
        echo 'execute isso';
    } else {
        echo 'senão execute isso';
    }

    // >= Maior ou igual
    if ($num1 >= $num2) {
        echo 'tal tal..';
    }


    // Operador Lógico && = E

    $var1 = 'valor1';
    $var2 = 'valor2';
    $var3 = 'valor3';

    if ( ($var1 == $var2) && ($var2 == $var3) ) {
        echo 'verdadeiro';
    } else {
        echo 'falso';
    }

    //Operador Lógico || = OU

    if ( ($var1 == $var2) || ($var2 == $var3) ) {
        echo 'verdadeiro';
    } else {
        echo 'falso';
    }

?>