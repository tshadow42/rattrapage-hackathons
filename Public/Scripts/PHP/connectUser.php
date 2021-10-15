<?php
session_start();

require_once "../../../Functions/db.php";
require_once "../../../DAO/user.php";

if (count($_POST) == 2
    && !empty($_POST["email"])
    && !empty($_POST["password"])){

    $userToConnect = canConnectUser($_POST["email"], $_POST["password"]);

    if ($userToConnect){
        $_SESSION["user"] = $userToConnect;
        echo "success";
    }else{
        die("fail");
    }

}else{
    die("fail");
}