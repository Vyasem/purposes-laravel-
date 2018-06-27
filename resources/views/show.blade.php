@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-2">
            @include('left')
        </div>
        <div class="col-xs-12 col-md-6 reg_block">
            @if (session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
            <h2>Редактирование персональных данных</h2>
            <form method="post" enctype="multipart/form-data" action="/personal/change/">
                {{csrf_field()}}
                <input name="REG[ID]" type="hidden" value="<?=$user->id?>">
                <div class="form-group row">
                    <label for="form_login" class="col-form-label col-sm-2">Логин</label>
                    <div class="col-sm-10">
                        <input type="text" name="REG[LOGIN]" class="form-control" id="form_login" placeholder="Логин" value="<?=$user->login?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="form_pass" class="col-form-label col-sm-2">Пароль</label>
                    <div class="col-sm-10">
                        <input type="password" name="REG[PASSWORD]" class="form-control" id="form_pass" placeholder="Пароль">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="confirm_form_pass" class="col-form-label col-sm-2">Подтверждение пароля</label>
                    <div class="col-sm-10">
                        <input type="password" name="REG[PASSWORD_confirmation]" class="form-control" id="confirm_form_pass" placeholder="Подтверждение пароля">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="form_email" class="col-form-label col-sm-2">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="REG[EMAIL]" class="form-control" id="form_email" placeholder="Email" value="<?=$user->email?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="form_name" class="col-form-label col-sm-2">Имя</label>
                    <div class="col-sm-10">
                        <input type="text" name="REG[NAME]" class="form-control" id="form_name" placeholder="Имя" value="<?=$user->name?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-default">Отправить</button>
            </form>
        </div>
    </div>
@endsection