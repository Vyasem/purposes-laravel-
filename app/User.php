<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function add($data)
    {

        $inserData = $data['REG'];
        $result = DB::table('users')->insert([
            'login' => $inserData['LOGIN'],
            'password' => bcrypt($inserData['PASSWORD']),
            'email' => $inserData['EMAIL'],
            'name' => $inserData['NAME'],
        ]);

        return $result;
    }

    public function updateUser($data, $id)
    {
        $inserData = $data['REG'];
        $arData = array();
        foreach($inserData as $key => $val)
        {
            $field = strtolower($key);

            if(empty($val) || $field == 'password_confirmation')
                continue;

            if($field == 'password')
                $val = bcrypt($val);

            $arData[$field] = $val;
        }
        $result = DB::table('users')->where('id', $id)
            ->update($arData);
        return $result;
    }
}
