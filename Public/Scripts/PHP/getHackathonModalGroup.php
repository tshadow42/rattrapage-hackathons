<?php

session_start();
require_once "../../../DAO/hackathon.php";

if (count($_GET) == 1
    && !empty($_GET["hackathonId"])){

    $hackathon = hackathonGetById($_GET["hackathonId"]);


    echo $hackathon["title"]."@-@".;
}else{
    die("fail");
}