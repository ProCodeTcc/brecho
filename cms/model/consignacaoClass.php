<?php
    class Consignacao{
        public function __construct(){
            
        }

        private $id;
        private $valor;
        private $dtInicio;
        private $dtTermino;

        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setValor($valor){
            $this->valor = $valor;
        }

        public function getValor(){
            return $this->valor;
        }

        public function setDtInicio($dtInicio){
            $this->dtInicio = $dtInicio;
        }

        public function getDtInicio(){
            return $this->dtInicio;
        }

        public function setDtTermino($dtTermino){
            $this->dtTermino = $dtTermino;
        }

        public function getDtTermino(){
            return $this->dtTermino;
        }
    }
?>