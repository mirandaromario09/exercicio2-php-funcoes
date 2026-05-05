<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>

        <?php
            $nome ="Romário";
            $sobrenome = "Miranda";
            const PAIS = "Brasil";

            echo "<br>Meu nome é: $nome $sobrenome";
            echo "<br>Eu sou do: " . PAIS;

            date_default_timezone_set('America/Sao_Paulo');
            echo "<br>Hojé é dia " . date("d/m/Y");
            echo " e a hora é " . date("H:i:s");

            

        ?>

    </h1>
</body>
</html>