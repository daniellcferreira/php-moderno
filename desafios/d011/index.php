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
        $preco = $_GET['preco'] ?? 0;
        $porcent = $_GET['porcent'] ?? 0;
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="porcent">Qual será a porcentagem de reajuste? <strong><span id="p"></span>%</strong></label>
            <input type="range" name="porcent" id="porcent" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porcent?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <?php 
            $formula = ($preco * $porcent) / 100;
            $novo = $preco + $formula;
        ?>

        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($preco,2,",",".")?>, com <strong><?=$porcent?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($novo,2,",",".")?></strong> a partir de agora.</p>
    </section>
    <script>
        mudaValor()
        function mudaValor() {
            p.innerText = porcent.value;
        }
    </script>
</body>
</html>