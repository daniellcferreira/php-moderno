<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $num = 300;
        echo "O valor da variaves é $num";

        $v = 45.2;
        var_dump($v);

        $num = 3e2;
        echo "O valor é $num";

        $num = (int) "950";
        var_dump($num);

        $casado = false;
        var_dump($casado);

        $vet = [6, 2, 9, 3, 5];

        
        var_dump($vet);
    ?>   
</body>
</html>