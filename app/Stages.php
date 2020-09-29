<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stages extends Model
{
    public $timestamps = false;

    public function requestHandle($request)
    {

        $data = $request['stage'];
        foreach($data as $dKey => $dVal)
        {
            $this->$dKey = $dVal;
        }
        $this->save();
    }

    public function getStage($stageId, $edit = false)
    {
        if($edit)
        {
            return $this->where('id', $stageId)->get();
        }
        else
        {
            $stages = $this->where('target_id', $stageId)->get();
            return $this->getStatus($stages);
        }

    }

    public function getStatus($stages)
    {
        $arReturn = array();
        $counter = 0;
        $singleState = 0;
        if(count($stages) > 0){
            $singleState = 100 / count($stages);
            foreach($stages as $sKey => $sVal)
            {
                if($sVal->status == 'successful')
                {
                    $counter++;
                }
            }
        }
        $arReturn['item_state'] = $counter * $singleState;
        $arReturn['stages'] = $stages;

        return $arReturn;
    }

    public function editStage($request)
    {
        return $this->where('id', $request['id'])->update($request['stage']);
    }

    public function removeStages($stage, $one = false)
    {
        if($one)
        {
            $this->where('id', $stage)->delete();
        }
        else
        {
            $this->where('target_id', $stage)->delete();
        }
    }
}