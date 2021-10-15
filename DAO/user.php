<?php
require_once __DIR__."/../Functions/db.php";
require_once __DIR__."/../Functions/password.php";

function userInsert(string $firstname, string $lastname, string $email, string $password): ?string{
    $password = password_hash(saltPassword($password), PASSWORD_DEFAULT);

    $db = dbConnect();
    $sql = "INSERT INTO USERS (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
    $params = [$firstname,
        $lastname,
        $email,
        $password];

    return dbInsert($db, $sql, $params);
}

function userGetById($id){
    $db = dbConnect();
    $sql = "SELECT id, firstname, lastname, email, role FROM USERS WHERE id = ?";
    $params = [$id];

    return dbFindOne($db, $sql, $params);
}

function canConnectUser(string $email, string $password): ?array{
    $db = dbConnect();
    $sql = "SELECT id, firstname, lastname, email, password, role FROM USERS WHERE email = ?";
    $params = [$email];

    $user = dbFindOne($db,$sql,$params);

    if(!is_null($user)){
        if(password_verify(saltPassword($password), $user["password"])){
            unset($user["password"]);
            return $user;
        }
    }
    return null;
}

function emailExist(string $email): bool{
    $db = dbConnect();
    $sql = "SELECT email FROM USERS WHERE email = ?";
    $params = [$email];

    if (dbFindOne($db, $sql, $params)){
        return true;
    }
    return false;
}

