<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'classe Papel e Encontro.php';

        // OBJETO 01
        $papel1 = new Papel;
        
        $papel1->cor = "Branco";
        $papel1->tamanho = "A4";
        $papel1->furos = true;
        $papel1->tipo = "Fichario";
        $papel1->conteudo = true;
        
        $papel1->rasgar();
        echo '<br/>';
        echo '<br/>';
        $papel1->ler();
        echo '<br />';
        echo '<br />';
        
        // OBJETO 02
        $milagre = new Encontro;

        $milagre->dia = "23/12";
        $milagre->horario = 20;
        $milagre->local = 'Av. Renato de Andrade Maia';
        $milagre->status = true;
        $milagre->referente = 'Gabriela';

        $milagre->adiar();
        echo '<br />';
        echo '<br />';
        $milagre->cancelar();        
        
        ?>
</body>
</html>