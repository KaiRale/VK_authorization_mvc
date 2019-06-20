<?php
require_once  __DIR__.'/../Model/Config.php';
require_once  __DIR__.'/../Model/Cookie.php';
Cookie::isAuthCookie('auth');
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
<body>

<div class="forInput">
    <a class="input" href="https://oauth.vk.com/authorize?client_id=<?=Config::ID?>&display=page&redirect_uri=<?=Config::URL?>&response_type=code">Авторизоваться через Vk</a>
</div>

</body>
</html>

