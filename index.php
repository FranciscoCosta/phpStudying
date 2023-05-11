<?php
echo "Olá eu sou , <br>";
echo "Francisco Costa <br>";
//Comentário de uma linha
/*
        Comentário de várias linhas
    */
?>


<?php
//Variaveis
$name = " Francisco Costa";
$email = "francisco100eg@gmail.com";
$age = 30;
$height = 1.75;
//string literal
echo "<br> Olá eu sou {$name}.";
echo "<br> O meu email é {$email}";
echo "<br> Eu tenho {$age} anos.";
echo "<br> Tenho {$height} de altura.";

    /*
    Matematica simples

    $total = 1 + 1
    $total = 1 - 1
    $total = 1 * 2
    $total = 1 / 2
    $total = 1 ** 2
    $total = 1 % 2
    */

    /*
    Incremento e Decremento
    
    $counter = 10;
    $counter--
    $counter++
    $counter+=2
    $counter-=2

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


    <form action="index.php" method="post">
        <label for="username">Usuário</label>
        <input type="text" name="username">
        <label for="password">Password</label>
        <input type="password" name="password">
        <button type="submit">
        LogIn
    </button>
    </form>

    <h1>Math fuction</h1>

    <form action="index.php" method="post">
        <label for="username">x:</label>
        <input type="text" name="x">
        <label for="y">y:</label>
        <input type="text" name="y">
        <label for="z">z:</label>
        <input type="text" name="z">
        <button type="submit">
        Enviar
    </button>
    </form>
</body>
</html>

<?php
    echo "{$_GET["username"]} <br>";
    echo "{$_GET["password"]} <br>";
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
    // GET envia a informação via Url
    // Post através de Body do Request Http

    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    echo "O valor de x é :{$x} <br>";
    echo "O valor de y é :{$y} <br>";
    echo "O valor de z é :{$z} <br>";

    $xabs = abs($x);
    $yround = round($y);
    $yfloor = floor($y);
    $yceil = ceil($y);
    $xpower = pow( $x, $y);
    $xsqrt = sqrt($x);
    $maxValue = max($x,$y,$z);
    $minValue = min($x,$y,$z);
    $randXY = rand($x,$y);

    
    echo "Valor absoluto de x {$xabs} <br>";
    echo "Valor arredondado de y {$yround} <br>";
    echo "Valor arredondado para baixo de y {$yround} <br>";
    echo "Valor arredondado para cima de y {$yceil} <br>";
    echo "Valor de x levantado a y {$xpower} <br>";
    echo "Valor da raiz quadrada de x {$xsqrt} <br>";
    echo "Valor máximo de x,y,z é : {$maxValue} <br>";
    echo "Valor minimo de x,y,z é : {$minValue} <br>";
    echo "Valor randomico entre x e y : {$randXY} <br>";

    //Condicionais if

    if($x > $y){
        echo "x é maior que y";
    }
    elseif($x == $y){
        echo "x é igual a y";
    }
    else{
        echo "x é menor que y";
    }

?>