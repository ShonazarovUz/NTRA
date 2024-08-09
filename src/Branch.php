<?php

namespace App;

use AllowDynamicProperties;

#[AllowDynamicProperties] class Branch
{

    public  function  __construct()
    {
        $this -> pdo = DB::connect();
    }

    public function createBranch($id, $name, $address)
    {
        $sql = 'INSERT INTO branch(id, name, address, created_at) VALUES (:id, :name, :address, NOW())';
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':id', $id);
        $stmt -> bindParam(':name', $name);
        $stmt -> bindParam(':address', $address);
        $stmt -> execute();
    }
    public function updateBranch($id, $name, $address)
    {
        $sql = 'UPDATE branch SET name = :name, address = :address, updated_at = NOW() WHERE id = :id';
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':id', $id);
        $stmt -> bindParam(':name', $name);
        $stmt -> bindParam(':address', $address);
        $stmt -> execute();
    }

    public function deleteBranch($id)
    {
        $sql = 'DELETE FROM branch WHERE id = :id';
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':id', $id);
        $stmt -> execute();
    }
}