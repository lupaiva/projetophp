<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comesebebes.com</title>
</head>
<body>
    <?php
    if($_SESSION["perfil"] == "adm"){
        include_once 'menu_adm.php';
    }else{
        include_once 'consultausu.php';
    }
    ?>
</body>
</html>