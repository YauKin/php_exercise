<?php
    extract($_GET);

    $loginSuccessful = true;

    if($loginSuccessful){
        echo "Login successfully!";
        session_start();
        $_SESSION['username'] = $_GET['uname'];
        $_SESSION['password'] = $_GET['password'];
        echo "Your user name:" . $_SESSION['username'] . " password:" . $_SESSION['password'];
    }else{
        echo "Login successfully!";
    }

?>