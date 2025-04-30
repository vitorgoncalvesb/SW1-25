<?php
    // INCLUSÃO DA CLASSE PESSOA
    include_once 'Pessoa.class.php';

    //INSTÂNCIANDO UM OBJETO
    $fulano = new Pessoa;
    $ciclano = new Pessoa;

    //ATRIBUINDO VALORES
    $fulano ->Nome = 'Felipe José Borges de Mello'; 

    $fulano ->Peso = 80;

    $fulano ->Altura = 1.75; 

    //ATRIBUINDO VALORES A CICLANO
    $ciclano ->Nome = 'Vitor Gonçalves Barros'; 

    $ciclano ->Peso = 62;

    $ciclano ->Altura = 1.99; 
    
    //CHAMANDO UM METODO DA CLASSE
    $fulano ->MostrarDados();
    $ciclano ->MostrarDados();
?>