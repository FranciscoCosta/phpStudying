<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <form action="index.php" method="post">
        <label for="username">Usuário</label>
        <br>
        <input type="text" name="username">
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password">
        <br>
        <button type="submit" name="login" value="login">
            Login
        </button>
    </form>

</body>

</html>

<?php
if (isset($_POST['login'])) {

    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $_SESSION["username"] = $_POST['username'];
        $_SESSION["password"] = $_POST['password'];
        
        header("Location: index.php");
    } else {
        echo "Preencha todos os campos";
    }
}
?>