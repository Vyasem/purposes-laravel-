<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Targets extends Model
{
    protected $table = "targets";

    //не использовать столбцы create_at и update_at
    public $timestamps = false;


    public function requestHandle($request, $user)
    {
        $this->name = $request['target']['name'];
        $this->start = $request['target']['start'];
        $this->end = $request['target']['end'];
        $this->text = $request['target']['text'];
        $this->user_id = $user['id'];
        $this->save();
    }

    public function updateTargets($request)
    {
        $this->where('id', $request['id'])->update($request['target']);
    }

    public function getTargets($user, $target, $edit = false)
    {
        if($edit)
        {
            //Получить цель для редактирования
            $targets = $this->where('user_id', $user['id'])->where('id', $target)->get();
            $arResult['targets'] = $targets[0];
        }
        else
        {
            //получить все цели
            $targets = $this->where('user_id', $user['id'])->get();
            $arResult['targets'] = $targets;
        }

        //определить id цели - для получения этапов
        if(empty($target))
        {
            $arResult['target_id'] = $arResult['targets'][0]->id;
        }
        else
        {
            $arResult['target_id'] = $target;
        }

        return $arResult;
    }

    public function removeTarget($target)
    {
        $this->destroy($target);
    }
}