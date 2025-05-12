<?php
    include_once 'conta.class.php';

    $conta1 = new Conta();

    $conta1 ->Nome = "Vitor Gonçalves";
    $conta1 ->Cpf = "123.456.789-90";
    $conta1 ->Saldo = 34;
    $conta1 ->MostrarSaldo();

    echo $conta1->Depositar(540);

    $conta1 ->MostrarSaldo();

    echo $conta1->Sacar(500)

    




?>