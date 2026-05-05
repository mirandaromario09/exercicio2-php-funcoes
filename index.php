<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    //operadores condicionais  
    // && = AND 
    // || = OR
    // ! = NOT    
    // && = AND - todas as condições precisam ser verdadeiras para retornar true
    // || = OR - apenas uma das condições precisa ser verdadeira para retornar true
    // ! = NOT - inverte o valor lógico, ou seja, se for true retorna false e vice-versa
    
    //operadores de comparação
    // == igual a
    // != diferente de
    // > maior que
    // < menor que
    // >= maior ou igual a
    // <= menor ou igual a  


    <?php //retorna verdadeiro se todas as condições forem verdadeiras
        if (5 > 3 && 10 > 7 && 3 == 3) {
            echo "true";
        } else {
            echo "false";
        }
    ?>
</body>
</html>
