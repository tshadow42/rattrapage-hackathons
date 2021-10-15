<?php
session_start();

require_once "../../../Functions/db.php";
require_once "../../../Functions/user.php";
require_once "../../../DAO/hackathon.php";
require_once "../../../DAO/event.php";
require_once "../../../DAO/participation.php";

if (!isConnect()){
    die();
}

if (count($_POST) == 6
    && !empty($_POST["title"])
    && !empty($_POST["description"])
    && !empty($_POST["start"])
    && !empty($_POST["end"])
    && !empty($_POST["groupMax"])
    && !empty($_POST["groupSize"])){

    $listOfErrors = [];

    if (!preg_match("#^[a-zA-Z0-9 ]*$#",$_POST["title"])){
        $listOfErrors[] = "title";
    }else{
        $_POST["title"] = trim($_POST["title"]);
    }

    if ((strtotime($_POST["end"]) - strtotime($_POST["start"])) < 86400 ){
        $listOfErrors[] = "dateInterval";
    }

    if ($_POST["groupMax"] < 1){
        $listOfErrors[] = "groupMax";
    }

    if ($_POST["groupSize"] < 1){
        $listOfErrors[] = "groupSize";
    }

    if ($listOfErrors){
        die(implode("@-@", $listOfErrors));
    }else{
        $hackathon = hackathonInsert($_POST["title"], $_POST["description"], $_POST["groupMax"], $_POST["groupSize"]);
        if ($hackathon){
            eventInsert("Début", "Début du hackathon", "#198754", "s", "f", strtotime($_POST["start"]), strtotime($_POST["start"]), $hackathon);
            eventInsert("Fin", "Fin du hackathon", "#dc3545", "e", "f", strtotime($_POST["end"]), strtotime($_POST["end"]), $hackathon);
            newParticipation($_SESSION["user"]["id"], $hackathon, "a");
            echo $hackathon;
        }
    }
}else{
    die("fail");
}