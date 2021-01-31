<?php

    include '../database.php';
    $customerInfo["email"]= $_POST["e-mail"];
    $customerInfo["password"] = crypt($_POST["password"],"");
    $customerInfo["name"] = $_POST["name"];
    $customerInfo["dob"] = $_POST["dob"];

    customerSignup($customerInfo);
    

?>