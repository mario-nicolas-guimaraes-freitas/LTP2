<?php

    class ContaBancaria{
        public $numeroConta;
        private $saldoConta;

        public function __construct($numeroConta , $saldoConta){
            $this->$numeroConta = $numeroConta;
            $this->$saldoConta = $saldoConta;
        }

        public function mostraSaldo(){
           // echo "A conta numero " . $this->numeroConta. " tem saldo " . $this->saldoConta;
        }
        public function __getMostraSaldo(){
            echo "seu saldo é: ".$this->saldoConta;
        }
    }

    $conta = new ContaBancaria(123456 , 123.00);
    $conta->__getMostrasaldo();

    //$conta->mostraSaldo();

?>