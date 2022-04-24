<?php

class SignupCtrl extends Signup{

    private $email;
    private $username;
    private $password;
    private $confirmPassword;

    public function __construct($email, $username, $password, $confirmPassword) {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
    }

    public function SignupUser(){
        //if input is empty
        if($this->emptyInput() == false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        //invalid email
        if($this->invalidEmail() == false){
            header("location: ../index.php?error=email");
            exit();
        }

        //invalid username
        if($this->invalidUser() == false){
            header("location: ../index.php?error=username");
            exit();
        }

        // password doesnt match
        if($this->passwordMatch() == false){
            header("location: ../index.php?error=password");
            exit();
        }

        // username or email taken
        if($this->usernameTakenCheck() == false){
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->username, $this->password, $this->email, $this->confirmPassword);
    }
    
    private function emptyInput(){
        $result;
        if(empty($this->email || $this->username || $this->password || $this->confirmPassword)){
            $result = false;
        } else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        } else{
            $result = true;
        }
        return $result;
    }
        
    private function invalidUser(){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
            $result = false;
        } else{
            $result = true;
        }
        return $result;
    }

    private function passwordMatch(){
        $result;
        if($this->password !== $this->confirmPassword){
            $result = false;
        } else{
            $result = true;
        }   
        return $result;
    }

    private function usernameTakenCheck(){
        $result;
        if(!$this->checkUser($this->username, $this->email)){
            $result = false;
        } else{
            $result = true;
        }   
        return $result;
    }
}