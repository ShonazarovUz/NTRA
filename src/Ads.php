<?php

namespace App;

use AllowDynamicProperties;
use PDO;

#[AllowDynamicProperties] class Ads
{
    public  function  __construct()
    {
        $this -> pdo = DB::connect();
    }

    public function createAds(
        $id,
        $title,
        $description,
        $user_id,
        $status_id,
        $branch_id,
        $address,
        $price,
        $rooms,
    )

    {
        $sql = "INSERT INTO ads(id, title, description, user_id, status_id, branch_id, address, price, rooms, created_at)
                VALUES (:id, :title, :description, :user_id, :status_id, :branch_id, :address, :price, :rooms, NOW())";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
        $stmt -> bindParam(':title', $title, PDO::PARAM_STR);
        $stmt -> bindParam(':description', $description, PDO::PARAM_STR);
        $stmt -> bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt -> bindParam(':status_id', $status_id, PDO::PARAM_INT);
        $stmt -> bindParam(':branch_id', $branch_id, PDO::PARAM_INT);
        $stmt -> bindParam(':address', $address, PDO::PARAM_STR);
        $stmt -> bindParam(':price', $price, PDO::PARAM_INT);
        $stmt -> bindParam(':rooms', $rooms, PDO::PARAM_INT);
        $stmt -> execute();

    }



}