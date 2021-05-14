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
    <h1>Desafio2 de PHP</h1>
            
    <?php
    //A temperatura em Celsius será escrita na URL após as palavras php, escrever da forma: ?c=
    
           {
            echo "<h2>Insira na URL após as palavras php a temperatura em Celsius para ser convertida em Fahrenheit, escrever da forma: ?c= , e aperte ENTER.</h2>";
           }

           $c = $_GET["c"];
           $f = (9 * $c + 160 )/5; 
     
           {
           echo "<p>A temperatura recebida em Celsius é $c</p>";
           }
            
           {
           echo"</p>A temperatura em Fahrenheit é: $f</p>";
           }
    ?>
        
</body>
</html>