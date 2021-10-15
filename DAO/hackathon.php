<?php
require_once __DIR__."/../Functions/db.php";

function hackathonInsert(string $title, string $description, int $maxGroup, int $maxInGroup): ?string{
    $db = dbConnect();
    $sql = "INSERT INTO HACKATHON (title, description, maxGroups, maxInGroups) VALUES (?, ?, ?, ?)";
    $params = [
        $title,
        $description,
        $maxGroup,
        $maxInGroup
    ];

    return dbInsert($db, $sql, $params);
}

function hackathonUpdate(string $id, string $title, string $description, int $maxGroup, int $maxInGroup): ?string{
    $db = dbConnect();
    $sql = "UPDATE HACKATHON SET title = ?, description = ?, maxGroups = ?, maxInGroups = ? WHERE id = ?";
    $params = [
        $title,
        $description,
        $maxGroup,
        $maxInGroup,
        $id
    ];

    return dbExec($db, $sql, $params);
}

function hackathonGetById(string $id): ?array{
    $db = dbConnect();
    $sql = "SELECT id, title, description, maxGroups, maxInGroups, advancement FROM HACKATHON WHERE id = ?";
    $params = [$id];

    return dbFindOne($db, $sql, $params);
}

function hackathonGetList(): ?array{
    $db = dbConnect();
    $sql = "SELECT id, title, description, maxGroups, maxInGroups, advancement FROM HACKATHON";
    $params = [];

    return dbFindAll($db, $sql, $params);
}