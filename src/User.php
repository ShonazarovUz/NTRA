<?php

namespace App;

use PDO;
class User
{
    private  PDO  $pdo;
    public  function  __construct()
    {
        $this -> pdo = DB::connect();
    }

    public function createUser($username, $position, $gender, $phone, $email, $password)
    {
        $sql = "INSERT INTO users (username, position, gender, phone, email, password, created_at) 
                VALUES (:username, :position, :gender, :phone, :email, :password, NOW())";
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':position', $position, PDO::PARAM_STR);
        $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
    
        return $this->pdo->lastInsertId();
    }
    
    public function updateUser($id, $username, $position, $gender, $phone): void
    {
        $sql = "UPDATE users SET username = :username, position = :position, gender = :gender, phone = :phone, updated_at = NOW() WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':position', $position, PDO::PARAM_STR);
        $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
        $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
        $stmt->execute();
    }


    public function deleteUser($id)
    {
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $this -> pdo -> prepare($sql);
        $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
        $stmt -> execute();
    }

    public function loginn(string $email, string $password): void
    {
        $stmt= $this->pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        dd($user);
        if ($user) {
            $_SESSION['user'] = [
                'email' => $user['email'],
                'password'=> $user['password'],
            ];

            unset($_SESSION['user']['error']);
            header('location: /');
        
        }
        $_SESSION['message']['error'] = "Wrong email or password";
        header('Location: /login');
    }


}
