<?php


class Code
{
    public function __construct()
    {
        $this->checkCode();
    }

    public function checkCode(){
        if(!$_GET['code']){
            echo 'error code';
            return false;
        }
        file_put_contents(__DIR__.'/../Core/code',$_GET['code']);
    }
}