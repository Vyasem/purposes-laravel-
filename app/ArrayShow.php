<?php

namespace App;


class ArrayShow
{

    public function __construct($array = array())
    {
        //$this->arShow($array);
    }

    public static function arShow($array)
    {
        echo '<pre>';
        var_dump($array);
        echo '</pre>';
    }
}