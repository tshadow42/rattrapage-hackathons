<?php

require_once "../../../Functions/db.php";
require_once "../../../Functions/password.php";
require_once "../../../DAO/user.php";

if (count($_POST) == 5
    && isset($_POST["register-lastname"])
    && isset($_POST["register-firstname"])
    && isset($_POST["register-email"])
    && isset($_POST["register-password"])
    && isset($_POST["register-repeat-password"])){

    $listOfErrors = [];

    if(!checkPasswordConformity($_POST("register-password"))){
        $listOfErrors[] = "passwordNoConform";
    }

    if($_POST("register-password") != $_POST["register-repeat-password"]){
        $listOfErrors[] = "passwordNoMatch";
    }

    if (!preg_match("#^[a-zA-Z]*$#",$_POST["register-lastname"])){
        $listOfErrors[] = "lastname";
    }else{
        $_POST["register-lastname"] = trim($_POST["register-lastname"]);
        $_POST["register-lastname"] = strtolower($_POST["register-lastname"]);
        $_POST["register-lastname"] = ucwords($_POST["register-lastname"]);
    }

    if (!preg_match("#^[a-zA-Z]*$#",$_POST["register-firstname"])){
        $listOfErrors[] = "firstname";
    }else{
        $_POST["register-firstname"] = trim($_POST["register-firstname"]);
        $_POST["register-firstname"] = strtolower($_POST["register-firstname"]);
        $_POST["register-firstname"] = ucwords($_POST["register-firstname"]);
    }

    if(filter_var($_POST["register-email"], FILTER_VALIDATE_EMAIL)){
        $listOfErrors[] = "emailNoConform";
    }else{
        $_POST["register-email"] = strtolower($_POST["register-email"]);
    }

    if (emailExist($_POST["register-email"])){
        $listOfErrors = "emailExist";
    }
    
}else{
    die("une erreur est survenus");
}