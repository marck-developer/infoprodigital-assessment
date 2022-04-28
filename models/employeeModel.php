<?php

require_once("helper/dbConnection.php");

function get()
{
    $query = conn()->prepare("SELECT * FROM users");

    try {
        $query->execute();
        $employees = $query->fetchAll();
        return $employees;
    } catch (PDOException $e) {
        return [];
    }
}
