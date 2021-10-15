<?php

require_once __DIR__."/../Functions/db.php";
require_once __DIR__."/../DAO/user.php";

function newParticipation(string $user_id, string $hackathon_id, ?string $role): ?string{
    $db = dbConnect();
    $sql = "INSERT INTO participation (USERS_id, hackathon_id, roleInHackathon) VALUES (?, ?, ?)";
    $params = [
        $user_id,
        $hackathon_id,
        $role??"p"
    ];

    return dbInsert($db, $sql, $params);
}

function deleteParticipation(string $user_id, string $hackathon_id): ?int{
    $db = dbConnect();
    $sql = "DELETE FROM participation WHERE USERS_id = ? AND hackathon_id = ?";
    $params = [
        $user_id,
        $hackathon_id,
    ];

    return dbExec($db, $sql, $params);
}

function participateTo(string $user_id, string $hackathon_id): ?string{
    $db = dbConnect();
    $sql = "SELECT users_id, hackathon_id, roleinhackathon FROM participation WHERE USERS_id = ? AND hackathon_id = ?";
    $params = [
        $user_id,
        $hackathon_id
    ];

    $participation = dbFindOne($db, $sql, $params);
    return $participation["roleinhackathon"]??null;
}

function numberOfParticipation(string $id): int{
    $db= dbConnect();
    $sql = "SELECT COUNT(hackathon_id) FROM participation WHERE hackathon_id = ? AND roleInHackathon ='p'";
    $params = [$id];

    $count = dbFindOne($db, $sql,$params);
    return array_shift($count);
}

function getAllParticipant(string $id): ?array{
    $db = dbConnect();
    $sql = "SELECT USERS_id FROM participation WHERE hackathon_id = ? AND roleInHackathon = 'p'";
    $params = [$id];

    $result = [];
    if (!$result){
        return null;
    }
    foreach (dbFindAll($db,$sql,$params) as $participation){
        $result[] = userGetById($participation["USERS_id"]);
    }
    return $result;
}