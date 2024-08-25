<?php 
declare(strict_types= 1);

namespace Controller;

use App\User;

class LoginAd
{
    public function login()
    {
        $email = $_POST['username'];
        $password = $_POST['password'];

        dd([ $email, $password]);

        $num = (new User())->loginn($email, $password);
        dd($num);
        
    }
}