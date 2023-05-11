
<?php
    echo "Olá eu sou , <br>";
    echo "Francisco Costa <br>";
    //Comentário de uma linha
    /*
        Comentário de várias linhas
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button>
        Carrega em mim
    </button>
</body>
</html>

<?php
//Variaveis
    $name =" Francisco Costa";
    $email = "francisco100eg@gmail.com";
    $age = 30;
    $height = 1.75;
    $total = $age * $height;

    echo  "$total";
    //string literal
    echo "<br> Olá eu sou {$name}.";
    echo "<br> O meu email é {$email}";
    echo "<br> Eu tenho {$age} anos.";
    echo "<br> Tenho {$height} de altura.";


?> 