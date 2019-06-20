<?php
require_once  __DIR__.'/../Model/Cookie.php';
require_once  __DIR__.'/../Model/Config.php';
require_once  __DIR__.'/../Model/Code.php';
require_once  __DIR__.'/../Model/Token.php';
require_once  __DIR__.'/../Model/UserData.php';


$code=new Code();
$token=new Token();
$data=new UserData($token);
Cookie::setCookie('auth','true');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<div class="content">
    <h2>Добро пожаловать, <?php $data->getFirstName();$data->getLastName();?>!</h2>

    <div class="pic"><?php $data->friends->showPhoto()?></div>

    <p><input class="output" type="button" value="Выход" onClick='location.href="logout.php"'></p>
</div>

</body>
</html>
