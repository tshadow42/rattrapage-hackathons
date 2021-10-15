<?php

function isAdmin(): bool{
    if (isConnect()){
        return $_SESSION["user"]["role"] == "a";
    }
    return false;
}

function isConnect(): bool{
    return isset($_SESSION["user"]);
}