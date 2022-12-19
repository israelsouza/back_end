<?php
    class Computador{

        var $processador;
        var $placa_video;
        var $monitor;
        var $entradas_usb;
        var $ligado;

        function ligar() {
            if($this->ligado == true){
                echo '<p>ERRO: Computador já esta ligado</p>';
            } else {
                echo '<p>PC ligando...</p>'; 
                echo '<p>PC ligado!</p>';
            }
        }

        function desligar() {
            if($this->ligado == false) {
                echo 'ERRO: Já desligado';
            } else {
                echo '<p>PC desligando...</p>';
                echo '<p>PC desligado!!!</p>';
            }

        }

        function pesquisar() {
            if($this->ligado == false){
                echo 'ERROR: ligue o computador primeiro';
            } else {
                echo 'abrindo o navegador...';
                echo 'digite o que deseja pesquisar: '; 
            }
            
        }
    }
?>