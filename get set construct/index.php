<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Vela.php';
            require_once 'Caneta.php';

            // Objeto Vela
            $candleOne = new Vela("grama molhada");
            $candleOne->setCarga(57);
            print_r($candleOne);

            // Obejto Caneta
            $pencilOne = new Caneta("Faber Castel", 0.7);
            print_r($pencilOne);

        ?>
    </pre>
</body>
</html>