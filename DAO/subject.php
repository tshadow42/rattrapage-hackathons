<?php

require_once __DIR__."/../Functions/db.php";

function subjectInsert (string $title, string $description, string $for, string $by): ?string{
    $db = dbConnect();
    $sql = "INSERT INTO SUBJECT (title, description, isFor, proposedBy) VALUES (?, ?, ?, ?)";
    $params = [
        $title,
        $description,
        $for,
        $by
    ];

    return dbInsert($db, $sql, $params);
}

function getAllSubjectFor (string $id): ?array{
    $db = dbConnect();
    $sql = "SELECT id, title, description, selectable, isFor, proposedBy FROM SUBJECT WHERE isFor = ?";
    $params = [
        $id
    ];

    return dbFindAll($db, $sql, $params);
}

function selectableSubject (string $subject, string $bool): ?int{
    $db = dbConnect();
    $sql = "UPDATE SUBJECT SET selectable = ? WHERE id = ?";
    $params = [
        $bool,
        $subject
    ];

    print_r($params);
    return dbExec($db, $sql, $params);
}