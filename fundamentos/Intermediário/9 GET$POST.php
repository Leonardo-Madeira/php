<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

    if(isset($_POST['acao'])){
        $nome = @$_POST['nome'];
        $email = @$_POST['email'];
        echo $nome;
        echo '<br>';
        echo $email;
    }

?>
<body>
    <form method="post">
        <input type="text" name="nome">
        <input type="text" name="email">
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>