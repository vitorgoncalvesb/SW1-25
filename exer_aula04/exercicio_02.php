<?php

    $num1 = $_GET['numero1'];

    $num2 = $_GET['numero2']; 

    $num3 = $_GET['numero3']; 

    $maior = max($num1, $num2, $num3);

    echo "O maior número entre os três é: $maior"
?>