<?php

class LoginCtrl extends Login{

    private $username;
    private $password;
    
    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function LoginUser(){
        //if input is empty
        if($this->emptyInput() == false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $this->getUser($this->username, $this->password);
    }
    
    private function emptyInput(){
        $result;
        if(empty($this->username || $this->password)){
            $result = false;
        } else{
            $result = true;
        }
        return $result;
    }
}