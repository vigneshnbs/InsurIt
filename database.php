<?php


  function customerSignup($customerInfo)
  {

    $localHost="localhost";
    $userName="root";
    $password = "";
    $db = "insurit";
    $conn = new mysqli($localHost,$userName,$password,$db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $passwordHash = $customerInfo["password"];
    $name = $customerInfo["name"];
    $dob = $customerInfo["dob"];
    $email = $customerInfo["email"];
    $sql = "INSERT INTO customer (password_hash, name, date_of_birth,created_at,updated_at,self_created,email)
     VALUES ('" . $passwordHash ."','". $name ."','". $dob ."',NOW(),NOW(),TRUE,'". $email ."')";
    $conn->query($sql);
    $conn->close();
  }

  function userSignup($userInfo)
  {

    $localHost="localhost";
    $userName="root";
    $password = "";
    $db = "insurit";
    $conn = new mysqli($localHost,$userName,$password,$db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $passwordHash = $userInfo["password"];
    $name = $userInfo["name"];
    $dob = $userInfo["dob"];
    $email = $userInfo["email"];
    $type = $userInfo["usertype"];
    $sql = "INSERT INTO user (name,password_hash,created_at,updated_at,user_type,self_created,email)
     VALUES ('" . $name ."','". $passwordHash ."',NOW(),NOW(),".$type.",TRUE,'".$email."')";
    $conn->query($sql);
    $conn->close();
  }

?>