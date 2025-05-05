<?php
    class Carro{
        public $Marca;
        public $Modelo;
        public $Combustivel;
        public $Portas;
        public $Capacidade_tanque;

        public function MostrarDados( ){
            echo"A marca é: " . $this->Marca . "<br>";
            echo "O modelo do carro é: " . $this->Modelo . "<br>"; 
            echo "o combustível restante disponível no carro é: " . $this->Combustivel . " <br>"; 
            echo "O número e portas do carro é de: " . $this->Portas . " <br>";
            echo "A capacidade que o tanque comporta é de: " . $this->Capacidade_tanque . " <br>";           
            echo "<hr>";
        }
    }

?>