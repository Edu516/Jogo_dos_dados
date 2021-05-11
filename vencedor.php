<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Jogo dos Dados</title>
</head>
<body>
    <?php

        //Gerando numeros aleatorios
        $h_dado1 = rand(1,6);
        $h_dado2 = rand(1,6);
        $c_dado1 = rand(1,6);
        $c_dado2 = rand(1,6);

        //Variaveis de caminho das imagens dos dados
        $hd1;
        $hd2;
        $cd1;
        $cd2;
        $img = 'img/rolar.gif';
        //gerando total da pontuação
        $total_humano  = $h_dado1 + $h_dado2;
        $total_com = $c_dado1 + $c_dado2;

        
        
        //escolhendo imagens
        switch ($h_dado1) {
            case "1":
                $hd1='img/d1.png';
                break;
            case "2":
                $hd1='img/d2.png';
                break;
            case "3":
                $hd1='img/d3.png';
                break;
            case "4":
                $hd1='img/d4.png';
                break;
            case "5":
                $hd1='img/d5.png';
                break;
            case "6":
                $hd1='img/d6.png';
                break;
        }
        switch ($h_dado2) {
            case "1":
                $hd2='img/d1.png';
                break;
            case "2":
                $hd2='img/d2.png';
                break;
            case "3":
                $hd2='img/d3.png';
                break;
            case "4":
                $hd2='img/d4.png';
                break;
            case "5":
                $hd2='img/d5.png';
                break;
            case "6":
                $hd2='img/d6.png';
                break;
        }
        switch ($c_dado1) {
            case "1":
                $cd1='img/d1.png';
                break;
            case "2":
                $cd1='img/d2.png';
                break;
            case "3":
                $cd1='img/d3.png';
                break;
            case "4":
                $cd1='img/d4.png';
                break;
            case "5":
                $cd1='img/d5.png';
                break;
            case "6":
                $cd1='img/d6.png';
                break;
        }
        switch ($c_dado2) {
            case "1":
                $cd2='img/d1.png';
                break;
            case "2":
                $cd2='img/d2.png';
                break;
            case "3":
                $cd2='img/d3.png';
                break;
            case "4":
                $cd2='img/d4.png';
                break;
            case "5":
                $cd2='img/d5.png';
                break;
            case "6":
                $cd2='img/d6.png';
                break;
        }

       
    ?>
    <h3>--------Jogador--------</h3>
    <p>---------Dados----------</p>
    <p><?php     
    
    echo "<img src=$hd1>";
    echo "<img src=$hd2>";

    ?>
    </p>

    
    <p>Total de Pontos: <?php echo $total_humano  ?>
    
    
    </p>

    <h3>--------Máquina--------</h3>
    <p>---------Dados----------</p>
    <p><?php     

    echo "<img src=$cd1>";
    echo "<img src=$cd2>";

    ?></p>
    <p>Total de Pontos: <?php echo $total_com  ?>
</body>
</html>