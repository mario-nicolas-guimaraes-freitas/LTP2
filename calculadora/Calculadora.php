<?php
   
    class Calculadora{
        public $numero1;
        public $numero2;

        public function __construct($numero1 , $numero2){
            $this->numero1 = $numero1;
            $this->numero2 = $numero2;
        }

        public function somarNumeros(){
            echo nl2br ("$this->numero1 + $this->numero2 = ".$this->numero1 + $this->numero2."\n");
    
        }

        public function subtrairNumeros(){
            echo nl2br("$this->numero1 - $this->numero2 = ".$this->numero1 - $this->numero2."\n");
    
        }

        public function multiplicarNumeros(){
            echo nl2br("$this->numero1 x $this->numero2 = ".$this->numero1 * $this->numero2."\n");
    
        }

        public function dividirNumeros(){
            echo nl2br("$this->numero1 ÷ $this->numero2 = ".$this->numero1 / $this->numero2."\n");
    
        }

    }
?>