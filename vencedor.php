<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Jogo dos Dados</title>
</head>
<body>
    <?php
        $h_dado1 = rand(1,6);
        $h_dado2 = rand(1,6);
        $c_dado1 = rand(1,6);
        $c_dado2 = rand(1,6);
        $total_humano  = $h_dado1 + $h_dado2;
        $total_com = $c_dado1 + $c_dado2;
    ?>
    <h3>--------Jogador--------</h3>
    <p>---------Dados----------</p>
    <p><?php echo $total_humano  ?></p>

    <h3>--------Máquina--------</h3>
    <p>---------Dados----------</p>
    <p><?php echo $total_com  ?></p>
    
</body>
</html>