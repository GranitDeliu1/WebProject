<?php

if(isset($_POST["submit"])){

    //grabbing the data
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    //instantiate Signup-ctrl classes
    include "../classes/dbh-classes.php";
    include "../classes/signup-classes.php";
    include "../classes/signup-ctrl-classes.php";
    $Signup = new SignupCtrl($email, $username, $password, $confirmPassword);

    //running error handlers
    $Signup->SignupUser();

    //going back to the front page
    header("location: ../index.php?error=none");
}