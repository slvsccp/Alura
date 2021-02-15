<?php

    $nome = 'Matheus';

    switch($nome){
        case 'Matheus':
            echo 'Minha variavel é Matheus <hr>';
            break;
        case 'Joao':
            echo 'Variavel é Joao <hr>';
            break;
    }

    for($i = 0; $i < 10; $i++){
        echo $i;
        echo '<hr>';
        if($i == 5)
        break;
    }

?>