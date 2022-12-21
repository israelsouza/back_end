<?php

    class Vela{
        private $carga;
        private $aroma;
        
        public function __construct($a){
            $this->setCarga(100);
            $this->setAroma($a);
        }

        public function getCarga(){
            return $this->carga;
        }
        public function setCarga($c){
            $this->carga = $c;
        }
        public function getAroma(){
            return $this->aroma;
        }
        public function setAroma($a){
            $this->aroma = $a;
        }
    }