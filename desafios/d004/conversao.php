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
        <h1>Conversor de Moedas</h1>
        <p>
            <?php
                $inicio = date("m-d-Y", strtotime("-6 days"));
                $fim = date("m-d-Y");
            
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
                $dados = json_decode(file_get_contents($url), true);
                //var_dump($dados);
                $cotacao = $dados["value"][0]["cotacaoCompra"];
                
                $real = $_GET["din"];
                $dolar = $real / $cotacao;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>   
</body>
</html>