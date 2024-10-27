<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ActiveUser
{
    private static $instance = null;

    private function __construct()
    {
        // Приватный конструктор
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setUser($user)
    {
        Session::put('activeUser', $user);
    }

    public function getUser()
    {
        return Session::get('activeUser');
    }

    public function isAuthenticated()
    {
        return Auth::check();
    }
}