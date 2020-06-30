<?php

function Connect($db) {
    $host = 'localhost';
    $user = 'root';
    $pw = '';

    $connection = mysqli_connect($host, $user, $pw, $db);
    if ($connection) {
        return $connection;
    } else {
        return false;
    }
}