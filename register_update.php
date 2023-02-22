<?php

    if(isset($_POST['insert'])){
    include 'connect_db.php';

    $email = $_POST['email'];
    $username = $_POST['username'];
    $passw = $_POST['password'];

    $query = "INSERT INTO `loginsystem`(`user_name`, `user_pw`, `user_email`) VALUES (:username, :passw, :email)";
    $result = $conn->prepare($query);

    $exuc = $result->execute(erray(":username"=>$username, ":passw"=>$passw, ":email"=>$email));
    
    if($exuc)
    {
        echo 'user created';
    }else{
        echo 'create user failed';
    }

    }
?>