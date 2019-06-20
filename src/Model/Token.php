<?php


class Token
{
    private $token=null;
    private $user_id=null;
    private $access_token=null;
    public $auth=null;

    public function __construct()
    {
        $this->getToken();
    }

    private function getToken(){
        if (file_exists(__DIR__.'/../Core/token')&&file_get_contents(__DIR__.'/../Core/token')){
            $this->token = file_get_contents(__DIR__.'/../Core/token');
        }
        else {
            $this->token = json_decode(file_get_contents('https://oauth.vk.com/access_token?client_id='.Config::ID.'&redirect_uri='.Config::URL.'&client_secret='.Config::SECRET.'&code='.$_GET['code']), true);


            if (!$this->token) {
                echo 'error token';
                return;
            }

            $this->setUserId();
            $this->setAccessToken();
        }
    }

    private function setAccessToken(){
        file_put_contents(__DIR__.'/../Core/token',$this->token['access_token']);
    }

    public function getAccessToken(){
        return $this->access_token=file_get_contents(__DIR__.'/../Core/token');
    }

    private function setUserId(){
        file_put_contents(__DIR__.'/../Core/user_id',$this->token['user_id']);
    }

    public function getUserId(){
        return $this->user_id=file_get_contents(__DIR__.'/../Core/user_id');
    }



}