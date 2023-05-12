<?php

include("database.php");

// $username = "Edu";
// $password = "edu1234";
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// // $sqlname = "SELECT * FROM users WHERE user = '$username'";


// // try{
// //     $result = mysqli_query($db_conn, $sqlname);
// //     echo $result;
// // }catch(mysqli_sql_exception $e){
// //     echo "Erro ao verificar usuário <br>";
// // }

// $sql = "INSERT INTO users (users, passwords) VALUES ('$username', '$hashed_password')";
// try {
//     mysqli_query($db_conn, $sql);
//     echo "Usuário registado <br>";
// } catch (mysqli_sql_exception $e) {
//     echo "Erro ao registar usuário <br>";
// }

// mysqli_close($db_conn);
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
    <form action="<?php ($_SERVER["PHP_SELF"]) ?>" method="post">
    <h1>Registo de usuários</h1>
    <label for="username">username</label>
    <input type="text" name="username" id="username">
    <label for="password">password</label>
    <input type="password" name="password" id="password">
    <button type="submit" name="submit" value="register">Cadastrar</button>
    </form>

</body>

</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    if(empty($username) || empty($password)){
        echo "Preencha todos os campos";
}
    $sql = "INSERT INTO users (users, passwords) VALUES ('$username', '$hashed_password')";
    try {
        mysqli_query($db_conn, $sql);
        echo "Usuário registado <br>";
    } catch (mysqli_sql_exception $e) {
        echo "Erro ao registar usuário <br>";
    }
    mysqli_close($db_conn);
}

    ?>