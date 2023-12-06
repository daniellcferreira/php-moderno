<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings</title>
</head>
<body>
    <?php 
        $nome = "Daniel";
        $sobrenome = "Ferreira";
        echo "$nome $sobrenome \u{1F596}";
        echo '$nome $sobrenome \u{1F596}';

        const CANAL = "Curso em Video \u{1F499}";
        echo "Eu adoro o CANAL";
        echo "Eu adoro o " . CANAL;

        echo "Estamos no ano de " . date('Y');


        $canal = "Curso em Video";
        $ano = date('Y');
        echo <<< TESTE
            Olá galera do $canal!
                Tudo bem com vocês?
            Como está sendo esse ano de $ano?
        TESTE;
    ?>
</body>
</html>