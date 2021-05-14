<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>

            <title> Primeiro php </title>

                <style> 
                    h1{color: #711; 
                    text-shadow: 1px 1px 1px black;
                    text-align: center;
                    }
                </style>

    </head>

<body>
    <h1>Desafio5 PHP</h1>

         <?php
/*Faça um programa em php que contenha uma função sem parâmetros que,
sempre que chamada, imprima todos os números de 1 a 100.*/  
           {
            echo "<h2>Insira na URL após as palavras php as tres notas, 
            (escrever da forma: ?nota1= & nota2= & nota3= ) e aperte ENTER.</h2>";
           }
//dados a receber
           $nota1 = $_GET["nota1"];
           $nota2 = $_GET["nota2"];
           $nota3 = $_GET["nota3"];

//Mostrar as notas
            {
            echo "<p>As notas recebidas foram: $nota1,$nota2,$nota3</p>";
            }
//Dados para somar
           $SomaDasNotas = ($nota1 + $nota2 + $nota3);
           $resultado = $SomaDasNotas / 3; 
           if ($resultado >= "6"){
               echo "Aprovado!";
           } 
           elseif($resultado<"6"){
               echo "Reprovado!";
           }*/
/*
//converter os dados para dias
           $conv1 = $DiasDoAno * $ano; 
           $conv2 = $DiasDoMes * $mes;
//Somar tudo
           $soma = $conv1 + $conv2 + $dias;
//Mostrar os valores recebidos, ano/mes/dias
           {
           echo "<p>As notas recebidas foram: $nota1,$nota2,$nota3</p>";
           }
           
/Mostrar a idade em dias
           {
           echo"<p>A sua idade em dias é: $soma</p>";
           }*/
    ?>
        
</body>
</html>