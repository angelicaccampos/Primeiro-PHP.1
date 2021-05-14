<!DOCTYPE hmtl>
<html>
    <head>
        <meta charset = "utf-8"/>
            <title> Primeiro PHP</title>
        <style>
            h1{color: #711;
            texte-shadow:1px 1px 1px black;
            text-align: center;
            }
        </style>
        
    </head>
    
<body>
    <h1> Desafio4 PHP</h1>
    
    <?php
    {
    echo "<h2>Insira na URL após as palaras php os números do seu de nascimento,
    a quantidade de meses que voce viveu até hoje e quantos dias desde o ida que
    voce nasceu até o dia de hoje,(escrever da forma: ?ano= & mes= & dias=) e 
    aperte ENTER.</h2>";
    }
    
// Dados a receber
    $ano = $_GET["ano"];
    $mes = $_GET["mes"];
    $dias = $_GET["dias"];
//Dados para converter
    $DiasDoAno = 360;
    $DiasDoMes = 30;
//Converter os dados em dias
    $conv1 = $DiasDoAno * $ano;
    $conv2 = $DiasDoMes * $mes;
//Somar tudo
    $soma = $conv1 + $conv2 + $dias;
//Mostrar os valores recebidos, ano/mes/dias
    {
    echo "<p>Os valores recebidos foram: $ano, $mes, $dias</p>";
    }    
    {
    echo "<p>*Não será levado em consideração os anos bissextos</p>;
    }
//Mostrar a idade em dias
    {
    echo "<p>A sua idade em dias é:$soma</p>";
    }
    ?>    
    
</body>
</html>