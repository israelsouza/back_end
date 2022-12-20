<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        // incluindo o arquivo da classe
        require_once 'classe Computador.php';

        // instanciando na variavel (aqui ele se torna um OBJETO)
        $pc1 = new Computador;

        // definindo valores aos atributos
        // testes
        $pc1->processador = "AMD Ryzen 7";
        //$pc1->monitor = 20;   erro pois esta privado
        $pc1->placa_video = "gtx 1650 4gb";


        // chamando metodo
        $pc1->ligar();

    ?>
</body>
</html>