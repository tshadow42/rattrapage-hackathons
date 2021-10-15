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
echo "<pre>";
var_dump($_POST);
echo "</pre>";

if (count($_POST) == 7
    && !empty($_POST["id"])
    && !empty($_POST["title"])
    && !empty($_POST["start"])
    && !empty($_POST["end"])
    && !empty($_POST["description"])
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
        if (hackathonUpdate($_POST["id"],$_POST["title"], $_POST["description"], $_POST["groupMax"], $_POST["groupSize"])){
            changePeriod(strtotime($_POST["start"]), strtotime($_POST["start"]), $_POST["id"], "s");
            changePeriod(strtotime($_POST["end"]), strtotime($_POST["end"]), $_POST["id"], "e");
            header("location: ../../../hackathonOption.php?hackathon=$_POST[id]");
        }
    }
}else{
    die("fail");
}