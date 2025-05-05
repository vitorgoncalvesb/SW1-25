<?php
    class Lampada{
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        public function Ligar( ){
            $this ->Status = True;
        }

        public function Desligar( ){
            $this ->Status = False;
        }

        public function MostrarDados( ){
            echo"O fabricante é: " . $this->Fabricante . "<br>";
            echo "A tensão é: " . $this->Tensao . "<br>"; 
            echo "A potência é: " . $this->Potencia . " <br>"; 
            echo "A cor é: " . $this->Cor . " <br>";
            if($this ->Status == True){
                echo"A lâmpada está ligada";
            }else{
                echo"A lâmpada está desligada";
            }
             
        
        }
    }

?>