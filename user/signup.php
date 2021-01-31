<?php

    include '../database.php';
    $userInfo["email"]= $_POST["e-mail"];
    $userInfo["password"] = crypt($_POST["password"],"");
    $userInfo["name"] = $_POST["name"];
    $userInfo["dob"] = $_POST["dob"];
    $userInfo["usertype"] = $_POST["usertype"];
    userSignup($userInfo);
    

?>