<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                $num = $_GET["numero"];
                echo "O numero escolhido foi $num<br>";
                echo "O seu antecessor de $num é " . ($num - 1) ."<br>";
                echo "O seu secessor é de $num é " . ($num + 1) . "<br>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>