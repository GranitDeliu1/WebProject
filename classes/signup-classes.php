<?php

class Signup extends database{

    protected function setUser($username, $password, $email, $confirmPassword) {
        $stmt = $this->connect()->prepare('INSERT INTO users (username, password, email, confirmPassword) VALUES (?, ?, ?, ?);');

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        $hashedConfirmPwd = password_hash($confirmPassword, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($username, $hashedPwd, $email, $hashedConfirmPwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($username, $email) {
        $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ? OR email = ?;');

        if(!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfail");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }

        else {
            $resultCheck = true;
        }
        
        return $resultCheck;
    }
}