<?php
session_start();


require_once "../../../Functions/user.php";
require_once "../../../DAO/subject.php";

if (!isConnect()){
    die("fail");
}


if (count($_POST) == 2
    && !empty($_POST["id"])
    && !empty($_POST["bool"])){

    echo selectableSubject($_POST["id"], $_POST["bool"]);

}else{
    die("fail");
}