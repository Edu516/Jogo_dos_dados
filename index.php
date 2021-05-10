<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Jogo dos Dados</title>
</head>
<body>
    <?php
        $h_dado1;
        $h_dado2;
        $c_dado1;
        $c_dado2;

        $h_dado1 = rand(1,6);
        $h_dado2 = rand(1,6);
        $c_dado1 = rand(1,6);
        $c_dado2 = rand(1,6);
        
        echo $c_dado1." | ".$c_dado2." | ".$h_dado1." | ".$h_dado2;
    ?>
</body>
</html>