<?php
    class Calculadora {

        //Variables privadas.
        private $mayor = 0;
        private $menor = 0;

        function __construct($num1, $num2)
        {
            $this->checkMayor($num1,$num2);
        }

        //Función que comprueba cuál es el número mayor
        //y el menor y los asigna correctamente.
        function checkMayor($num1,$num2) {
            if($num1>$num2) {
                $this->mayor=$num1;
                $this->menor=$num2;
            } else {
                $this->mayor=$num2;
                $this->menor=$num1;
            }
        }

        function suma(){
            return $this->mayor+$this->menor;
        }
        function resta() {
            return $this->mayor-$this->menor;
        }
        function multiplica() {
            return $this->mayor*$this->menor;
        }
        function divide() {
            return $this->mayor/$this->menor;
        }
    }
?>