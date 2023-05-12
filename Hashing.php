<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Hashing.php" method="post">
        <label for="password">password</label>
        <input type="password" name="password">
    </form>
    
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $password = $_POST["password"];
        echo "Passoword normal {$password} <br>";

        //hash
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);


        $verifyPassword = password_verify($password,$hashpassword);

        if($verifyPassword){
            echo "Mesma senha <br>";
        }
        echo "Hashpassword {$hashpassword} <br>";
    }

    ?>