<?php

declare(strict_types=1);

use App\User;

$username = $_POST['username'] ?? null;
$position = $_POST['position'] ?? null;
$gender   = $_POST['gender'] ?? null;
$phone    = isset($_POST['phone']) ? (int) $_POST['phone'] : null;
$email    = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if ($username && $position && $gender && $phone && $email && $password) {
    $newUser = (new User())->createUser(
        $username,
        $position,
        $gender,
        $phone,
        $email,
        $password
    );
}