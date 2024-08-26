<?php

declare(strict_types=1);

namespace Controller;

use App\User;

class LoginAd
{

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        (new User())->loginn($email, $password);
    }

}