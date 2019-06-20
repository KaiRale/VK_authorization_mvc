<?php
require_once  __DIR__.'/../Model/Cookie.php';
Cookie::clearCookie('auth');
header('Location: index.php');