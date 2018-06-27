<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Главная
Route::get('/', 'Controller@showMain');
//Регистрация
Route::get('/registration/', 'Controller@actionForm');
Route::post('/registration/create/', 'UserController@createUser');
//Изменение персональных данных
Route::get('/personal/', 'UserController@showUser');
Route::post('/personal/change/', 'UserController@changeData');
//Выход
Route::get('/logout/', 'UserController@logOut');
//Создание цели
Route::get('/target/createform/', 'TargetController@showForm');
Route::post('/target/create/', 'TargetController@createTarget');
//Route::match(['post', 'get'], '/target/createform/', 'TargetController@showForm');
//Изменения целей
Route::get('/target/change/{target}', 'TargetController@changeTarget');
Route::post('/target/update/', 'TargetController@updateTarget');
//Удаление цели
Route::get('/target/remove/{target}/', 'TargetController@removeTarget');
//Отображение целей
Route::get('/target/show/{target?}', 'TargetController@targetList');
//Список этапов относящихся к цели
Route::get('/target/stage/{target?}', 'TargetController@stageList');
//Создание этапа
Route::post('/target/stage/create/', 'TargetController@createStage');
//Редактироваие этапа
Route::get('/stage/edit/{stage}/', 'TargetController@changeStage');
Route::post('/stage/edit/{stage}/', 'TargetController@updateStage');
//Удаление этапа
Route::get('/stage/remove/{stage}/', 'TargetController@removeStage');
//Авторизация
Route::post('/auth/', 'UserController@loginUser');
