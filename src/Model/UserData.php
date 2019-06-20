<?php
require_once  __DIR__.'/../Model/UserFriends.php';

class UserData
{
    private $data=null;
    private $first_name=null;
    private $last_name=null;
    public $token=null;
    public $friends=null;

    public function __construct(Token $token)
    {
        $this->token=$token;
        $this->friends=new UserFriends($this->token);
        $this->getData();
    }

    private function getData(){
        $this->data=json_decode(file_get_contents('https://api.vk.com/method/users.get?user_id='.$this->token->getUserId().
            '&access_token='.$this->token->getAccessToken().'&fields=uid,first_name,last_name&v=5.52'),true);

        if (!$this->data){
            echo'error data';
            return;
        }
    }

    public function getFirstName(){
        $this->first_name=$this->data['response'][0]['first_name'];
        echo  "$this->first_name ";
        return;
    }

    public function getLastName(){
        $this->last_name=$this->data['response'][0]['last_name'];
        echo "$this->last_name";
        return;
    }
}