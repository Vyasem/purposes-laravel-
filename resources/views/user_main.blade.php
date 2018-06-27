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
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <div class="info_block">
                <div class="block">
                    <xml version="1.0" encoding="utf-8" standalone="yes">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                        <!---<path d="M 10 90 L 50 0 L 90 90 z"  fill="red" stroke="blue" stroke-width="3" />--->
                        <g fill="none" stroke="#000" stroke-width="1">
                            <polyline points="5,30,10,20,15,30"/>
                            <polyline points="1140,275,1150,280,1140,285"/>
                            <polyline points="10,20,10,280,1150,280"/>
                        </g>
                        <g fill="none" stroke="#000" stroke-width="1">
                            <polyline  points="60,275,60,285"/>
                            <polyline  points="110,275,110,285"/>
                            <polyline  points="160,275,160,285"/>
                            <polyline  points="210,275,210,285"/>
                            <polyline  points="260,275,260,285"/>
                            <polyline  points="310,275,310,285"/>
                            <polyline  points="360,275,360,285"/>
                            <polyline  points="410,275,410,285"/>
                            <polyline  points="460,275,460,285"/>
                            <polyline  points="510,275,510,285"/>
                        </g>
                        <!--<g fill="red">
                            <polygon points="27,253  32,253 32,258 27,258" />
                            <polygon points="147,233  152,233 152,238 147,238" />
                            <polygon points="250,153  255,153 255,158 250,158" />
                            <polygon points="800,40  805,40 805,45 800,45" />
                        </g>-->
                        <g fill="none" stroke="red" stroke-width="1">
                            <polyline points="32,255.5,152,235.5"/>
                            <polyline points="152,235.5,255,155.5"/>
                            <polyline points="255,155.5,800,42.5"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
@endsection