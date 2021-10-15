<?php
session_start();

require_once "../../../Functions/user.php";
require_once "../../../DAO/subject.php";

if (!isConnect()){
    die("fail");
}


if (count($_POST) == 3
    && !empty($_POST["title"])
    && !empty($_POST["description"])
    && !empty($_POST["hackathon"])){

    subjectInsert($_POST["title"], $_POST["description"], $_POST["hackathon"], $_SESSION["user"]["id"]);
    header("location: ../../../myHackathon.php");
}else{
    die("fail");
}