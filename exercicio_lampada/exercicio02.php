<?php
    include_once 'Carro.class.php';

    $carro1 = new Carro();

    $carro1 ->Marca = "BMW";
    $carro1 ->Modelo = "M5 competition";
    $carro1 ->Combustivel = 34;
    $carro1 ->Portas = 4;
    $carro1 ->Capacidade_tanque = 68;

    $carro1 ->MostrarDados();

    $carro2 = new Carro();

    $carro2 ->Marca = "Peugeot";
    $carro2 ->Modelo = 208;
    $carro2 ->Combustivel = 40;
    $carro2 ->Portas = 5;
    $carro2 ->Capacidade_tanque = 85;

    $carro2 ->MostrarDados();

    $carro3 = new Carro();

    $carro3 ->Marca = "Mercedes";
    $carro3 ->Modelo = 'G63';
    $carro3 ->Combustivel = 24;
    $carro3 ->Portas = 4;
    $carro3 ->Capacidade_tanque = 60;

    $carro3 ->MostrarDados();

    $carro4 = new Carro();

    $carro4 ->Marca = "Ferrari";
    $carro4 ->Modelo = 'F8';
    $carro4 ->Combustivel = 30;
    $carro4 ->Portas = 2;
    $carro4 ->Capacidade_tanque = 75;

    $carro4 ->MostrarDados();

    $carro5 = new Carro();

    $carro5 ->Marca = "Fiat";
    $carro5 ->Modelo = 'Uno';
    $carro5 ->Combustivel = 50;
    $carro5 ->Portas = 5;
    $carro5 ->Capacidade_tanque = 15;

    $carro5 ->MostrarDados();
?>