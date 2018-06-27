@extends('layouts.app')
@section('content')
<div class="col-xs-12 col-md-6 reg_block">
    @if (session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    <h2>Форма регистрации</h2>
    <form method="post" enctype="multipart/form-data" action="/registration/create/">
        {{csrf_field()}}
        <div class="form-group row">
            <label for="form_login" class="col-form-label col-sm-2">Логин</label>
            <div class="col-sm-10">
                <input type="text" name="REG[LOGIN]" class="form-control" id="form_login" placeholder="Логин" value="{{old('REG.LOGIN')}}">
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
                <input type="email" name="REG[EMAIL]" class="form-control" id="form_email" placeholder="Email" value="{{old('REG.EMAIL')}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="form_name" class="col-form-label col-sm-2">Имя</label>
            <div class="col-sm-10">
                <input type="text" name="REG[NAME]" class="form-control" id="form_name" placeholder="Имя" value="{{old('REG.NAME')}}">
            </div>
        </div>
        <div class="checkbox">
            <label>
                <input name="REG[PERSONAL]" type="checkbox">Разрешение на хранение и сбор персональных данных
            </label>
        </div>
        <button type="submit" class="btn btn-default">Отправить</button>
    </form>
</div>
@endsection