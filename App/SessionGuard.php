<?php

namespace App;

use App\Models\account;
use App\Models\users;

class SessionGuard
{
    protected static $users;

    public static function login(account $user, array $credentials)
    {
        $verified = password_verify($user->password, password_hash($credentials['password'], PASSWORD_DEFAULT));
        if ($verified) {
            $_SESSION['user_id'] = $user->email;
        }
        return $verified;
    }

    public static function users()
    {
        if (!static::$users && static::isUserLoggedIn()) {
            static::$users = account::join("users","users.email","=","account.email")->where("account.email",$_SESSION['user_id'])->first();
        }
        return static::$users;
    }

    public static function logout()
    {
        static::$users = null;
        session_unset();
        session_destroy();
    }

    public static function isUserLoggedIn()
    {
        return isset($_SESSION['user_id']);
    }
}