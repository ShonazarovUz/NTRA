<?php

namespace App;

use AllowDynamicProperties;
use PDO;
#[AllowDynamicProperties] class Status
{
    public  function  __construct()
    {
        $this -> pdo = DB::connect();
    }
    public function createStatus($name)
    {
        $sql = "INSERT INTO status (name) VALUES (:name)";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':name', $name);
        return $stmt -> execute();
        // return $this->pdo->lastInsertId();
    }

    public function updateStatus($id, $name)
    {
        $sql = "UPDATE status SET name = :name, updated_at = NOW() WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
        $stmt -> bindParam(':name', $name, PDO::PARAM_STR);
        $stmt -> execute();
    }

    public function deleteStatus($id)
    {
        $sql = "DELETE FROM status WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
        $stmt -> execute();
    }
}