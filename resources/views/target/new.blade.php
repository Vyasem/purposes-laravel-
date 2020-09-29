@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-2">
            @include('left')
        </div>
        <div class="col-xs-12 col-md-10">
            @if (session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
            <form action="/target/create/" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="info_block goals_page">
                    <div class="col-xs-12 col-md-12 title">Новая цель</div>
                    <div class="col-xs-12 col-md-12 buttons">
                        <input id="send" type="submit">
                        <label for="send" class="add">Создать</label>
                    </div>
                    <div class="block col-xs-12 col-md-8">
                         <div class="form-group row">
                            <label for="form_name" class="col-form-label col-sm-2">Название</label>
                            <div class="col-sm-10">
                                <input type="text" name="target[name]" class="form-control" id="form_name" placeholder="Название" value="{{old('name')}}">
                                @error('target.name')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_start" class="col-form-label col-sm-2">Дата начала</label>
                            <div class="col-sm-10">
                                <input type="date" value="{{old('start')}}"  name="target[start]" class="form-control" id="form_start" placeholder="Дата начала">
                                    @error('target.start')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_finish" class="col-form-label col-sm-2">Дата завершения</label>
                            <div class="col-sm-10">
                                <input type="date" value="{{old('end')}}" name="target[end]" class="form-control" id="form_finish" placeholder="Дата завершения">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="form_des" class="col-form-label col-sm-2">Описание</label>
                            <div class="col-sm-10">
                                <textarea name="target[text]" class="form-control" id="form_des">{{request()->get('text')}}</textarea>
                                @error('target.text')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection