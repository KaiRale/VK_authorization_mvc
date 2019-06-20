<?php

class Cookie
{
    public static function setCookie(string $name, string $value){
        setcookie($name,$value,time()+60*60*24*365*10);
    }
    public static function clearCookie(string $name){
        setcookie($name,'');
        unlink(__DIR__.'/../Core/token');
        unlink(__DIR__.'/../Core/code');
        unlink(__DIR__.'/../Core/user_id');
    }

    public static function isAuthCookie(string $name){
        if (isset($_COOKIE[$name])){
            $code='?code='.file_get_contents(__DIR__.'/../Core/code');
            header('Location: vk.php'.$code);
        }
    }

}