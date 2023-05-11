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

        <select name="grade">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option vClue="D">D</option>
            <option vDlue="E">E</option>
            <option vElue="F">F</option>
        </select>
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
$grade = $_POST["grade"];
echo "O valor de x é :{$x} <br>";
echo "O valor de y é :{$y} <br>";
echo "O valor de z é :{$z} <br>";

$xabs = abs($x);
$yround = round($y);
$yfloor = floor($y);
$yceil = ceil($y);
$xpower = pow($x, $y);
$xsqrt = sqrt($x);
$maxValue = max($x, $y, $z);
$minValue = min($x, $y, $z);
$randXY = rand($x, $y);


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

if ($x > $y) {
    echo "x é maior que y <br>";
} elseif ($x == $y) {
    echo "x é igual a y <br>";
} else {
    echo "x é menor que y <br>";
}
//condicionals
if ($x >= 0 && $x <= 10) {
    echo "x é maior que 0 e menor que 10 <br>";
} else {
    echo "x é menor que 0 ou maior que 10 <br>";
}
if ($x < 0 || $x > 10) {
    echo "x é menor que 0 ou maior que 10 <br>";
} else {
    echo "x é maior que 0 e menor que 10 <br>";
}

//!  -> not


switch ($grade) {
    case "A":
        echo "Excelente <br>";
        break;
    case "B":
        echo "Bom <br>";
        break;
    case "C":
        echo "Satisfatório <br>";
        break;
    case "D":
        echo "Insatisfatório <br>";
        break;
    default:
        echo "Nota inválida <br>";
        break;
}

// for($i = 0;$i <= 5; $i+= 1){
//     echo $i;
// }
// $counterWhile = 0;

// while($counterWhile < 100){
//     sleep(1);
//     echo "{$counterWhile}segundo.";
//     $counterWhile += 5;
// }

$comida = array("Pizza", "Hamburger", "Pasta");

$comida[0] = "sushi";

array_push($comida, "Picanha", "alcatra");
array_pop($comida);
array_shift($comida);
$reverseComida = array_reverse($comida);

count($comida);

foreach ($comida as $food) {
    echo $food . "<br>";
}
// Associative arrays

$capitais = array("Portugal" => "Porto", "Brasil" => "Brasilia", "Espanha" => "Madrid");

//  altera valor da chave
$capitais["Portugal"] = "Lisboa";

//adiciona nova chave valor
$capitais["Suiça"] = "Berna";

//remove ultimo elemento
array_pop($capitais);

//remove primeiro elemnto
array_shift($capitais);
//listas as chaves
$chaves = array_keys($capitais);

$fliped = array_flip($capitais);

//listas os valors

$valores = array_values($capitais);

foreach ($capitais as $key => $value) {
    echo "A capital de {$key} é {$value} <br>";
}

foreach ($chaves as $chave) {
    echo "{$chave} <br>";
}
foreach ($valores as $valor) {
    echo "{$valor} <br>";
}

foreach ($fliped as $valor => $key) {
    echo "A capital de {$key} é {$value} <br>";
}


//isset() => verifica se a variavel existe
//empty() => verifica se a variavel está vazia

$nome = "Xico";

if (isset($nome)) {
    echo "A variavel existe <br>";
} else {
    echo "A variavel não existe <br>";
}

if (empty($nome)) {
    echo "A variavel está vazia <br>";
} else {
    echo "A variavel não está vazia <br>";
}
?>

<?php
// Funções
function sayHello($name){
    echo "Hello {$name} <br>";
}

sayHello("Xico");


function sum($x,$y){
    return $x + $y;
}

echo sum(5,5);

function stringLower($string){
    return strtolower($string);
}

echo stringLower("Xico");

function stringUpper($string){
    return strtoupper($string);
}

echo stringUpper("Xico");

function stringLength($string){
    return strlen($string);
}

echo stringLength("Xico");

function stringReplace($string,$old,$new){
    return str_replace($old,$new,$string);
}

echo stringReplace("Xico","X","Z");

function stringSubstr($string,$start,$end){
    return substr($string,$start,$end);
}

echo stringSubstr("Xico",0,2);

function stringExplode($string,$delimiter){
    return explode($delimiter,$string);
}


echo stringExplode("Xico,João,Manuel",",");

?>