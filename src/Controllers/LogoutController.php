<?php

class LogoutController
{
    public function indexAction(){
        $content='logout.php';

        $data=[
            'title'=>'Главная',
        ];
        //вывели страничку $page
        echo $this->renderPage($content,$data);
    }
    public function renderPage($content,$data=[]){
        extract($data);
        //преобразует массив к виду переменна($ключ = "значение") $title='Главная';
        ob_start();
        include_once __DIR__.'/../Views/'.$content;
        //перетащили считай все содержимое template.php
        // и весь этот треш гладется строкой в переменную $page
        $page=ob_get_contents();
        ob_end_clean();
        return $page;
    }
}