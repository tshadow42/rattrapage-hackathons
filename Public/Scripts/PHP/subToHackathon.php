<?php

session_start();

require_once "../../../Functions/db.php";
require_once "../../../Functions/user.php";
require_once "../../../DAO/hackathon.php";
require_once "../../../DAO/participation.php";

if (!isConnect()){
    die("fail");
}

if (count($_POST) == 1
    && !empty($_POST["hackathonId"])){

    if(newParticipation($_SESSION["user"]["id"], $_POST["hackathonId"], "p")){
        echo "success";
    }
    else{
        die("fail");
    }
}else{
    die("fail");
}