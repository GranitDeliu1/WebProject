<?php

if(isset($_POST["submit"])){

    //grabbing the data
    $username = $_POST["username"];
    $password = $_POST["password"];

    //instantiate Signup-ctrl classes
    include "../classes/dbh-classes.php";
    include "../classes/login-classes.php";
    include "../classes/login-ctrl-classes.php";
    $Login = new LoginCtrl($username, $password);

    //running error handlers
    $Login->LoginUser();

    //going back to the front page
    header("location: ../index.php?error=none");
}