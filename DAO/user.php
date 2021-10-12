<?php
require_once ("../Functions/db.php");

function emailExist(string $email): bool{
    $db = dbConnect();
    $sql = "SELECT email FROM USERS WHERE email = ?";
    $params = [$email];

    if (dbFindOne($db, $sql, $params)){
        return true;
    }
    return false;
}

