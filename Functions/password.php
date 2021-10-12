<?php

function saltPassword(string $password): string{
    return "9(JIO@€mp".$password."&mMa";
}

function checkPasswordConformity(string $password): bool{
    if (strlen($password) < 6
        ||strlen($password) > 50
        || !preg_match("#[a-z]#", $password)
        || !preg_match("#[A-Z]#", $password)
        || !preg_match("#[0-9]#", $password)){
        return false;
    }
    return true;
}