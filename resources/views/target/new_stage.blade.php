@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-xs-12 col-md-2">
        @include('left')
    </div>
    <div class="col-xs-12 col-md-10">
        <div class="info_block goals_page">
            <div class="col-xs-12 col-md-12 title">Новый этап</div>
            @if (session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
            <div class="block col-xs-12 col-md-8">
                <form action="/target/stage/create/" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="stage[target_id]" value="{{$targetId}}">
                    <div class="col-xs-12 col-md-12 buttons">
                        <input id="send" type="submit">
                        <label for="send" class="add">Создать</label>
                    </div>
                    <div class="form-group row">
                        <label for="form_name" class="col-form-label col-sm-2">Название</label>
                        <div class="col-sm-10">
                            <input type="text" name="stage[name]" value="{{old('stage.name')}}" class="form-control" id="form_name" placeholder="Название">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="form_sort" class="col-form-label col-sm-2">Приоритет</label>
                        <div class="col-sm-10">
                            <input type="number" value="{{old('stage.priority')}}" name="stage[priority]" class="form-control" id="form_sort" placeholder="Приоритет">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="form_start" class="col-form-label col-sm-2">Дата начала</label>
                        <div class="col-sm-10">
                            <input type="date" value="{{old('stage.start')}}" name="stage[start]" class="form-control" id="form_start" placeholder="Дата начала">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="form_finish" class="col-form-label col-sm-2">Дата завершения</label>
                        <div class="col-sm-10">
                            <input type="date" value="{{old('stage.end')}}" name="stage[end]" class="form-control" id="form_finish" placeholder="Дата завершения">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="form_des" class="col-form-label col-sm-2">Описание</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="stage[description]" id="form_des">{{old('stage.description')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-2" for="status">Состояние </label>
                        <div class="col-sm-10">
                            <select name="stage[status]" id="status">
                                @foreach($status as $sKey => $sVal)
                                    <option value="{{$sKey}}">{{$sVal}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection