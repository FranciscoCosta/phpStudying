<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    <label for="">User</label>
    <input type="text" name="user">
</form>
    
</body>
</html>




<!-- 
<?php

    //$_Server

    foreach($_SERVER as $key => $value){
        echo "{$key} => {$value} <br>";
    }
    ?> -->

    <?php

    $username = $_POST["user"];
    echo $username;

    ?>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Form enviado";
    }
    ?>