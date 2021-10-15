<?php

require_once "../../../Functions/db.php";
require_once "../../../Functions/password.php";
require_once "../../../DAO/user.php";

if (count($_POST) == 5
    && !empty($_POST["lastname"])
    && !empty($_POST["firstname"])
    && !empty($_POST["email"])
    && !empty($_POST["password"])
    && !empty($_POST["passwordRepeat"])){

    $listOfErrors = [];

    if(!checkPasswordConformity($_POST["password"])){
        $listOfErrors[] = "passwordNoConform";
    }else if($_POST["password"] != $_POST["passwordRepeat"]){
        $listOfErrors[] = "passwordNoMatch";
    }

    if (!preg_match("#^[a-zA-Z]*$#",$_POST["lastname"])){
        $listOfErrors[] = "lastname";
    }else{
        $_POST["lastname"] = trim($_POST["lastname"]);
        $_POST["lastname"] = strtolower($_POST["lastname"]);
        $_POST["lastname"] = ucwords($_POST["lastname"]);
    }

    if (!preg_match("#^[a-zA-Z]*$#",$_POST["firstname"])){
        $listOfErrors[] = "firstname";
    }else{
        $_POST["firstname"] = trim($_POST["firstname"]);
        $_POST["firstname"] = strtolower($_POST["firstname"]);
        $_POST["firstname"] = ucwords($_POST["firstname"]);
    }

    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $listOfErrors[] = "emailNoConform";
    }else{
        $_POST["email"] = strtolower($_POST["email"]);
    }

    if (emailExist($_POST["email"])){
        $listOfErrors[] = "emailExist";
    }

    if (sizeof($listOfErrors) > 0){
        echo implode("@-@", $listOfErrors);
    }else{
        if (userInsert($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["password"])) {
            echo "success";
        }else{
            die("fail");
        }

    }
}else{
    die("fail");
}