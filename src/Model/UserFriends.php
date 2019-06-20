<?php

class UserFriends
{
    public $friends=null;
    private $token=null;
    public function __construct(Token $token)
    {
        $this->token=$token;
        $this->getFriends();
    }

    private function getFriends(){
        $this->friends=json_decode(file_get_contents('https://api.vk.com/method/friends.get?order=random&count=5&access_token='.$this->token->getAccessToken().
            '&fields=photo_100&v=5.52'),true);

        if(!$this->friends){
            echo 'error friends';
            return;
        }
        $this->friends=$this->friends['response']['items'];

    }

    public function showPhoto(){
        foreach ($this->friends as $item){
            $item=$item[Config::PHOTO];
            echo "<img src=$item> ";
        }
    }
}