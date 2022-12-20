<?php
    class Computador{

        public $processador;
        public $placa_video;
        private $monitor;
        private $entradas_usb;
        protected $ligado;

        public function ligar() {
            if($this->ligado == true){
                echo '<p>ERRO: Computador já esta ligado</p>';
            } else {
                echo '<p>PC ligando...</p>'; 
                echo '<p>PC ligado!</p>';
            }
        }

        private function desligar() {
            if($this->ligado == false) {
                echo 'ERRO: Já desligado';
            } else {
                echo '<p>PC desligando...</p>';
                echo '<p>PC desligado!!!</p>';
            }

        }

        protected function pesquisar() {
            if($this->ligado == false){
                echo 'ERROR: ligue o computador primeiro';
            } else {
                echo 'abrindo o navegador...';
                echo 'digite o que deseja pesquisar: '; 
            }
            
        }
    }
?>