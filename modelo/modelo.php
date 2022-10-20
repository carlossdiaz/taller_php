<?php
    class Vehiculo{
        public $matricula;
        public $marca;
        public $modelo;
        public $color;
        public $revisado;

        function ___constructor($matricula, $marca, $modelo, $color, $revisado){
            $this->matricula = $matricula;
            $this->marca=$marca;
            $this->modelo = $modelo;
            $this->color = $color;
            $this->revisado = $revisado;
        }
        
        function get_matricula(){
            return $this->matricula = $matricula;
        }
        function get_marca(){
            return $this->marca = $marca;
        }
        function get_modelo(){
            return $this->modelo = $modelo;
        }
        function get_color(){
            return $this->color = $color;
        }
        function get_revisado(){
            return $this->revisado = $revisado;
        }
    }
?>