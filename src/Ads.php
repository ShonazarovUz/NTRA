<?php

namespace App;

use PDO;

// AdsGateway
class Ads
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function insertAds(
        string $title,
        int    $user_id,
        int    $status_id,
        int    $branch_id,
        int    $address_id,
        float  $price,
        int    $rooms,
        string $description): bool
    {
        $query = "INSERT INTO ads (title, user_id, status_id, branch_id, address_id, price, rooms, description, created_at) 
                  VALUE (:title, :user_id, :status_id, :branch_id, :address_id, :price, :rooms, :description, NOW())";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':address_id', $address_id);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        $stmt->bindParam(':description', $description);
        return $stmt->execute();
    }

    public function updateAds(
        string $title,
        int    $status_id,
        int    $branch_id,
        int    $address_id,
        int    $price,
        int    $rooms,
        int    $description): bool
    {
        $query = "UPDATE ads SET title = :title, status_id = :status_id, branch_id = :branch_id, 
                address_id = :address_id, price = :price, rooms = :rooms, 
                description = :description, updated_at = NOW() 
                WHERE id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':status_id', $status_id);
        $stmt->bindParam(':branch_id', $branch_id);
        $stmt->bindParam(':address_id', $address_id);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':rooms', $rooms);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function getAd(int $id)
    {
        return $this->pdo->query("SELECT * FROM ads WHERE id = :id")->fetch();
    }

    public function getAds(): false|array
    {
        return $this->pdo->query("SELECT * FROM ads")->fetchAll();
    }
}
