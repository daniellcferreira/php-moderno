<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $min = 1_380.60;
        $salario = $_GET['sal'] ?? $min;
    ?>

    <main>
        <h1>Informe seu Salario</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salario(R$) </label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de R$<strong><?=number_format($min, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
    </form>
    </main>
    
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($salario, $min);
            $dif = $salario % $min;

            echo "<p>Quem ganha R\$ ". number_format($salario, 2, ",", "."). " por mês, ganha um total de <strong>$tot salário mínimos + </strong>R\$ ". number_format($dif, 2, ",", "."). ".</p>";
        ?>
    </section>
</body>
</html>