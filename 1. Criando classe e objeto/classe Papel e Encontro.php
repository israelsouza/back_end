<?php
    class Papel{
        var $cor;
        var $tamanho;
        var $furos;
        var $tipo;
        var $conteudo;

        function rasgar(){
            echo "pegando o papel <br />";
            echo "rasgando ao meio...<br />";
            echo "rasgando em partes menores<br />";
            echo 'FEITO!';
        }

        function ler(){
            if ($this->conteudo == true) {
                echo 'É uma bela história..<br />';
                echo '.. que personagem fantastico..<br />';
                echo 'quem escreveu isso?';
            } else {
                echo "Vou ler o que se está em branco '-' ";
            }
        }

        function jogarFora() {
            echo 'Pegando o papel...<br />';
            echo 'Amassando o papel...<br />';
            echo 'Jogando fora!';
        }

    }

    class Encontro{
        var $referente; // com quem vou me encontrar?
        var $horario;
        var $dia;
        var $local;
        var $status; // esta de pe? foi cancelado?

        function adiar() {
            echo 'aconteceu um imprevisto, só poderei ir amanhã, pode ser? <br />';
            $this->dia = "24/12";
            echo " $this->dia";
        }

        function cancelar() {
            echo 'aconteceu um imprevisto, terei de cancelar <br />';
            $this->status = false;
            echo " $this->status";
        }

        function atrasar() {
            echo 'Ligando.. ';
            echo 'Olha só... ';
            echo 'vou chegar um pouco atrasado..';
        }
    }

?>