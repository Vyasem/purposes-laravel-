<?php

namespace App\Http\Controllers;

use App\User;
use App\CommonModel;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CheckForm;
use App\Http\Requests\CheckUpdate;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    private $users;
    private $request;
    private $menu;

    public function __construct(User $users, Request $request)
    {
        $this->users = $users;
        $this->menu = CommonModel::all();
        $this->request = $request;
    }

    public function createUser(CheckForm $checkForm)
    {
        $requestData = $checkForm->all();
        $this->users->add($requestData);
        return redirect('/registration/')->with('message', __('message.user_add'));
    }

    public function loginUser()
    {
        $data = $this->request->only('login', 'password');
        $remember = $this->request->only('remember');

        if (Auth::attempt($data, $remember))
        {
            return redirect()->intended();
        }

        return redirect('/')->with('message', __('message.auth_error'));
    }

    public function showUser()
    {
        $user = Auth::user();
        return view('show', array('menu' => $this->menu, 'user' => $user));
    }

    public function changeData(CheckUpdate $checkUpdate)
    {
        $requestData = $checkUpdate->all();
        $userId = Auth::user()->id;
        $this->users->updateUser($requestData, $userId);
        return redirect('/personal/')->with('message', __('message.change_data'));
    }

    public function logOut()
    {
        Auth::logout();
        return redirect('/');
    }
}