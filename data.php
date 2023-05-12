<?php

include("database.php");

$username = "Edu";
$password = "edu1234";

// $sqlname = "SELECT * FROM users WHERE user = '$username'";

// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

try{
    $result = mysqli_query($db_conn, $sqlname);
    echo $result;
}catch(mysqli_sql_exception $e){
    echo "Erro ao verificar usuário <br>";
}

$sql = "INSERT INTO users (users, passwords) VALUES ('$username', '$hashed_password')";
try {
    mysqli_query($db_conn, $sql);
    echo "Usuário registado <br>";
} catch (mysqli_sql_exception $e) {
    echo "Erro ao registar usuário <br>";
}

mysqli_close($db_conn);
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

</body>

</html>