<?php
function dbConnect() : PDO{
    $driver = "mysql";
    $host = "localhost";
    $port = 3306;
    $db = "hackathon";
    $user = "ncharvier";
    $password = "13072000";

    return new PDO("$driver:host=$host;port=$port;dbname=$db;charset=utf8", $user, $password);
}

function dbInsert(PDO $db, string $sql, array $params): ?string{
    $statement = $db->prepare($sql);
    if ($statement){
        $success = $statement->execute($params);
        if ($success){
            return $db->lastInsertId();
        }
    }
    return null;
}

function dbFindOne(PDO $db, string $sql, array $params): ?array{
    $statement = $db->prepare($sql);
    if ($statement) {
        $success = $statement->execute($params);
        if ($success){
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            if ($result){
                return $result;
            }
        }
    }
    return null;
}

function dbFindAll(PDO $db, string $sql, array $params): ?array{
    $statement = $db->prepare($sql);
    if ($statement) {
        $success = $statement->execute($params);
        if ($success){
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            if ($result){
                return $result;
            }
        }
    }
    return null;
}

function dbExec(PDO $db, string $sql, array $params): ?int{
    $statement = $db->prepare($sql);
    if ($statement) {
        $success = $statement->execute($params);
        if ($success){
            return $statement->rowCount();
        }
    }
    return null;
}