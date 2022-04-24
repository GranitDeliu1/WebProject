<?php

class Login extends database{

    protected function getUser($username, $password) {
        $stmt = $this->connect()->prepare('SELECT password FROM users WHERE username = ? OR email = ?;');

        if(!$stmt->execute(array($username, $password))) {
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("Location: ../index.php?error=usernotfound");
            exit();
        }

        $hashedPwd = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($password, $hashedPwd[0]["password"]);

        if($checkPwd == false) {
            $stmt = null;
            header("Location: ../index.php?error=wrongpassword");
            exit();
        } 
        
        else if($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ? AND password = ?;');

            if(!$stmt->execute(array($username, $email, $password))) {
                $stmt = null;
                header("Location: ../index.php?error=stmtfailed");
                exit();
            }

            if($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../index.php?error=usernotfound1");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["id"] = $user[0]["id"];
            $_SESSION["username"] = $user[0]["username"];

            $stmt = null;
        }

        $stmt = null;
    }
}