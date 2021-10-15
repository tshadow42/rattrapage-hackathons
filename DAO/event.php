<?php

require_once __DIR__."/../Functions/db.php";

function eventInsert(string $title, string $description, string $color, string $specialType, string $isOptional, int $dateStart, int $dateEnd, string $concern): ?string{
    $db = dbConnect();
    $sql = "INSERT INTO HACKEVENT (title, description, color, specialType, isOptional, dateStart, dateEnd, concern) VALUES (? ,? ,? ,? ,? ,FROM_UNIXTIME(?) ,FROM_UNIXTIME(?) ,?)";
    $params = [
        $title,
        $description,
        $color,
        $specialType,
        $isOptional,
        $dateStart,
        $dateEnd,
        $concern
    ];
    
    return dbInsert($db, $sql, $params);
}

function eventGetById(string $id): ?array{
    $db = dbConnect();
    $sql = "SELECT id, title, description, color, specialType, isOptional, dateStart, dateEnd, concern FROM HACKEVENT WHERE id = ?";
    $params = [$id];

    return dbFindOne($db, $sql, $params);
}

function changePeriod(int $start, int $end,string $id, string $beacon): ?int{
    $db = dbConnect();
    $sql = "UPDATE HACKEVENT SET dateStart = FROM_UNIXTIME(?), dateEnd = FROM_UNIXTIME(?) WHERE id = ? AND $beacon = ?";
    $params = [
        $start,
        $end,
        $id,
        $beacon
        ];

    return dbExec($db, $sql, $params);
}

function eventGetPeriod(string $id): ?array{
    $db = dbConnect();
    $sql = "SELECT id, title, description, color, specialType, isOptional, dateStart, dateEnd, concern FROM HACKEVENT WHERE (specialType = 's' OR specialType = 'e') AND concern = ? ORDER BY specialType";
    $params = [$id];

    return dbFindAll($db, $sql, $params);
}