@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-2">
            @include('left')
        </div>
        <div class="col-xs-12 col-md-10">
            <div class="info_block goals_page">
                <div class="col-xs-12 col-md-12 title">Мои цели</div>
                <div class="col-xs-12 col-md-12 buttons">
                    <div class="add"><a href="/target/createform/">Добавить цель</a></div>
                </div>
                <div class="block col-xs-12 col-md-12">
                    <div class="row">
                        @if(!empty($targets))
                            <div class="col-xs-12 col-md-4 goals_list">
                                <ul>
                                    @foreach($targets as $tKey => $tVal)
                                        <li>
                                            <!---<input type="checkbox" name="goals">--->
                                            <div class="goal_menu">
                                                <div class="meun_icon"><img src="/public/images/menu.svg"></div>
                                                <div class="menu_content">
                                                    <a href="/target/change/<?=$tVal->id?>/" >Изменить</a>
                                                    <a href="/target/stage/<?=$tVal->id?>/" >Добавить условие(этап)</a>
                                                    <a href="/target/remove/<?=$tVal->id?>/" >Удалить</a>
                                                </div>
                                            </div>
                                            <div class="content_block">
                                                <a href="/target/show/<?=$tVal->id?>/"><?=$tVal->name?></a><span>Вполнено на {{$state}}%</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <div style="clear:both" ></div>
                            </div>
                            <div class="col-xs-12 col-md-8 goals_block">
                                <ul>
                                    @foreach($stage as $sKey => $sVal)
                                        <li>
                                            <div class="stage_title">
                                                <div class="goal_menu">
                                                    <div class="meun_icon"><img src="/public/images/menu.svg"></div>
                                                    <div class="menu_content">
                                                        <a href="/stage/edit/<?=$sVal->id?>/" >Изменить</a>
                                                        <a href="/stage/remove/<?=$sVal->id?>/" >Удалить</a>
                                                    </div>
                                                </div>
                                                <div class="content_block">
                                                    <a href=""><?=$sVal->name?></a><span><?=$status[$sVal->status]?></span>
                                                </div>

                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection