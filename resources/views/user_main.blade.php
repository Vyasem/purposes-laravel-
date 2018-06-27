@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-5">
            <div class="info_block">
                <div class="title">Текуший прогресс</div>
                <div class="sub_title">Изучение английского языка</div>
                <div class="block">
                    <div class="item"><span>Потрачено:</span><span>14 дней(2 недели)</span></div>
                    <div class="item"><span>Движение к цели завершено на:</span><span> 12%</span></div>
                    <div class="item"><span>Текуший этап:</span><span>сбор денег</span></div>
                    <div class="item"><span>Выполнено этапов:</span><span>2</span></div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-7">
            <div class="info_block">
                <div class="title">План</div>
                <div class="sub_title">Изучение английского языка</div>
                <div class="block">
                    <div class="row">
                        <div class="col-xs-12 col-md-8">
                            <div class="item"><span>Завершение текушего этапа:</span><span>18.04.2018</span></div>
                            <div class="item"><span>Следуюший этап:</span><span> Заключить договор</span></div>
                            <div class="item"><span>Начало следующего этапа:</span><span>18.04.2018</span></div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div id="datepicker"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection