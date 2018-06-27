<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\CommonModel;
use App\Targets;
use App\Stages;
use App\Http\Requests\CheckTargetForms;
use App\Http\Requests\CheckStageForms;
use Illuminate\Support\Facades\Auth;

class TargetController extends Controller
{
    private $menu;
    private $targets;
    private $stages;

    public function __construct(Targets $targets, Stages $stages)
    {
        $this->menu = CommonModel::all();
        $this->targets = $targets;
        $this->stages = $stages;
    }

    public function targetList($target = null)
    {
        $allTargets = $this->targets->getTargets(Auth::user(), $target);
        $stageOne = $this->stages->getStage($allTargets['target_id']);
        return view('target/list', array('targets' => $allTargets['targets'], 'stage' => $stageOne['stages'], 'state' => $stageOne['item_state'],  'menu' => $this->menu));
    }

    public function showForm()
    {
        return view('target/new', array('menu' => $this->menu));
    }

    public function createTarget(CheckTargetForms $checkForm)
    {
        $requestData = $checkForm->all();
        $this->targets->requestHandle($requestData, Auth::user());
        return redirect('/target/createform/')->with('message', __('message.user_target'));
    }

    public function changeTarget($target)
    {
        $thisTarget = $this->targets->getTargets(Auth::user(), $target, true);
        return view('target/edit_targer', array('menu' => $this->menu, 'target' => $thisTarget));

    }

    public function updateTarget(CheckTargetForms $checkForm)
    {
        $requestData = $checkForm->all();
        $this->targets->updateTargets($requestData);
        return redirect('/target/change/'. $requestData['id'] .'/')->with('message', __('message.user_target_update'));
    }

    public function removeTarget($target)
    {
        $this->stages->removeStages($target);
        $this->targets->removeTarget($target);
        return redirect('/target/show/')->with('message', __('message.user_target_remove'));
    }

    public function stageList($target)
    {
        return view('target/new_stage', array('menu' => $this->menu, 'targetId' => $target));
    }

    public function createStage(CheckStageForms $checkForm)
    {
        $data = $checkForm->all();
        $this->stages->requestHandle($data);
        $target = $data['stage']['target_id'];
        return redirect('/target/stage/'.$target)->with('message', __('message.user_target'));
    }

    public function changeStage($stage)
    {
        $thisStage = $this->stages->getStage($stage, true);
        return view('target/edit_stage', array('menu' => $this->menu, 'stage' => $thisStage));
    }

    public function updateStage(CheckStageForms $checkForm)
    {
        $requestData = $checkForm->all();
        $this->stages->editStage($requestData);
        return redirect('/stage/edit/'. $requestData['id'] . '/')->with('message', __('message.user_stage_update'));

    }

    public function removeStage($stage)
    {
        $this->stages->removeStages($stage, true);
        return redirect('/target/show/')->with('message', __('message.user_stage_remove'));
    }
}