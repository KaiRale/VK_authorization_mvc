<?php


class Router
{

    public static function run(){

        $controller='Index';
        $action='index';
        $params=null;

        $routes=explode('/',$_SERVER['REQUEST_URI']);
        $code=(explode('.',$routes[1]))[0];
        if (!empty($routes[1])){
            $controller=$code;
        }

        if (!empty($routes[2])){
            $action=(explode('?',$controller));
        }

        if (!empty($routes[3])){
            $params=$routes[3];
        }

        $controller=ucfirst(strtolower($controller)).'Controller';
        $action=strtolower($action).'Action';


        if (!class_exists($controller)){
            echo 'Класс не найден';
            return;
        }
        if(!method_exists($controller,$action)){
            echo 'Метод не найден';
            return;
        }
        $controller = new $controller();
        $controller->$action($params);
    }
}