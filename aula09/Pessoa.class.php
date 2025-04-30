<?php
    // CRIANDO A CLASSE ->
    class Pessoa{
        // ATRIBUTOS ->
        public $Nome;
        public $Peso;
        public $Altura;

        // // MÉTODOS ->
        // public function MostrarDados(){
        //     echo"O nome é: " . $this->Nome . "<br>";
        //     echo"O peso é: " . $this->Peso . " kg <br>";
        //     echo"A altura é: " . $this->Altura . " metros <br>"; 
        //     echo"<hr>";
        // }

        // MÉTODOS ->
        public function MostrarDados(){
            echo"O nome é: " . $this->Nome . "<br> O peso é: " . $this->Peso . " kg <br> A altura é: " . $this->Altura . " metros <br> <hr>";
        }
    }

 

?> 