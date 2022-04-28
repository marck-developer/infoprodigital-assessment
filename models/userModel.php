<?php

require_once("helper/dbConnection.php");

function get()
{
    $query = conn()->prepare("SELECT * FROM users");

    try {
        $query->execute();
        $users = $query->fetchAll();
        return $users;
    } catch (PDOException $e) {
        return [];
    }
}
