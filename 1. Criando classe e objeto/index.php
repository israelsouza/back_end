<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        // incluindo o arquivo da classe
        require_once 'objeto Computador.php';

        // instanciando na variavel
        $pc1 = new Computador;

        // definindo valores aos atributos
        $pc1->monitor = '26 polegadas';
        $pc1->processador = 'AMD Ryzen';
        $pc1->entradas_usb = 3;
        $pc1->ligado = true;

        // chamando metodo
        $pc1->desligar();

    ?>
</body>
</html>