<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <tyle>
        h1{color:#711;
        text-align:center;        
        }
    </style>
</head>

<body>
    <h1>Desafio3 PHP</h1>
    <?php
    {
    echo "<h2>Insir na URL após as palavras php os dois valores de cada produto, escrever da forma: ?n1= & n2= , e aperte ENTER.</h2> "
    }
    
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $por1 =8;
    $por2= 11;
    $desc1 = ($por1/100)*$n1;
    $desc2 = ($por2/100)*$n2;
    $vpagar1 = $n1-$desc1;
    %vpagar2 = $n2-$desc2;
    
    {
    echo "<p> Os valores recebidos foram: $n1 e $n2 </p>";
    }
    
    {
    echo "<p> Os descontos são de 8% e de 11%, então em reais foram: $desc1 e $desc2</p>";
    }
    
    {
    echo"<p>Valor a ser pagar por cada produto:$vpagar1 e $vpagar2<p>";
    }
    ?>
</body>
</html>