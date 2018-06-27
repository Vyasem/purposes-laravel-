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
        <form action="/target/update/" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input name="id" type="hidden" value="<?=$target['targets']->id?>">
            <div class="info_block goals_page">
                <div class="col-xs-12 col-md-12 title">Изменить цель</div>
                <div class="col-xs-12 col-md-12 buttons">
                    <input id="send" type="submit">
                    <label for="send" class="add">Изменить</label>
                </div>
                <div class="block col-xs-12 col-md-8">
                    <div class="form-group row">
                        <label for="form_name" class="col-form-label col-sm-2">Название</label>
                        <div class="col-sm-10">
                            <input type="text" name="target[name]" class="form-control" id="form_name" placeholder="Название" value="<?=$target['targets']->name?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="form_start" class="col-form-label col-sm-2">Дата начала</label>
                        <div class="col-sm-10">
                            <input type="date" value="<?=$target['targets']->start?>"  name="target[start]" class="form-control" id="form_start" placeholder="Дата начала">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="form_finish" class="col-form-label col-sm-2">Дата завершения</label>
                        <div class="col-sm-10">
                            <input type="date" value="<?=$target['targets']->end?>" name="target[end]" class="form-control" id="form_finish" placeholder="Дата завершения">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="form_des" class="col-form-label col-sm-2">Описание</label>
                        <div class="col-sm-10">
                            <textarea name="target[text]" class="form-control" id="form_des"><?=$target['targets']->text?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection