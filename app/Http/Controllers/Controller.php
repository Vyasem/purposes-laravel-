<?php

namespace App\Http\Controllers;

use App\CommonModel;
use App\Main;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $menu;

    public function __construct()
    {
        $this->menu = CommonModel::all();
    }

    public function showMain()
    {
        $data = Main::mainData();
        $view = $data['page'];
        return view($view, array('menu' => $this->menu));
    }

    public function actionForm()
    {
        return view('reg', array('menu' => $this->menu));
    }

    public function goalsList()
    {
        return view('goals/list', array('menu' => $this->menu));
    }

}
