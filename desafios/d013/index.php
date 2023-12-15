<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 80px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <main>
        <?php 
            $saque = $_GET['saque'] ?? 0;
        ?>

        <h1>Caixa Eletronico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p style="font-size: 0.7em">*Notas disponiveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main> 
    
    <section>
        <?php 
            $resto = $saque;
            $tot100 = floor($resto / 100);
            $resto %= 100;

            $tot50 = floor($resto / 50);
            $resto %= 50;

            $tot10 = floor($resto / 10);
            $resto %= 10;

            $tot5 = floor($resto / 5);
            $resto %= 5;

            $tot1 = $resto;
        ?>

        <h2>Saque de R$<?=number_format($saque,2,",",".")?> realizado</h2>
        <p>O caixa eletronico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="100reais" class="nota"> <strong>x<?=$tot100?></strong></li>
            <li><img src="imagens/50-reais.jpg" alt="50reais" class="nota"> <strong>x<?=$tot50?></strong></li>
            <li><img src="imagens/10-reais.jpg" alt="10reais" class="nota"> <strong>x<?=$tot10?></strong></li>
            <li><img src="imagens/5-reais.jpg" alt="5reais" class="nota"> <strong>x<?=$tot5?></strong></li>
        </ul>

    </section>
</body>
</html>