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
        $total = $_GET['tot'] ?? 0;
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="tot">Qual é o tempo de segundos?</label>
            <input type="number" name="tot" id="tot" min="0" step="1" required value="<?=$total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    
    <section>
        <?php 
            $sobra = $total;
            $semana = (int)($sobra / 604800);
            $sobra = $sobra % 604800;

            $dia = (int)($sobra / 86400);
            $sobra = $sobra % 86400;

            $hora = (int)($sobra / 3600);
            $sobra = $sobra % 3600;

            $minuto = (int)($sobra / 60);
            $sobra = $sobra % 60;

            $segundo = $sobra;

        ?>

        <h2>Totalizando Tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=$total?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li> <?=$semana?> semanas</li>
            <li> <?=$dia?> dias</li>
            <li> <?=$hora?> horas</li>
            <li> <?=$minuto?> minutos</li>
            <li> <?=$segundo?> segundos</li>
        </ul>
    </section>
</body>
</html>