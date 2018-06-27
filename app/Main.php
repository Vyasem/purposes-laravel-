<?php

namespace App;

use Illuminate\Support\Facades\Auth;

class Main
{
    public function __construct()
    {

    }

    public static function mainData()
    {
        $auth = Auth::user();
        $view = array('page' => 'main', 'show' => 0);
        if($auth)
        {
            $userId = $auth->id;
            $view =  array('page' => 'user_main', 'show' => $userId);
        }
        return $view;
    }
}