<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NameController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\ValeraController;
use App\Http\Controllers\XController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\CountryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/form', [CountryController::class, 'form']);
Route::post('/result', [CountryController::class, 'result']);
Route::get('/country', [CountryController::class, 'show']);
Route::get('/salary', [SalaryController::class, 'show']);


Route::get('/x', [XController::class, 'show']);
Route::get('/valera', [ValeraController::class, 'show']);
Route::get('/welcome', [BladeController::class, 'show']);
Route::get('/city/user/{name}', [CityController::class, 'show']);
Route::get('/user/{name}/{surname}', [NameController::class, 'show']);
Route::get('/user', [UserController::class, 'show']);


Route::get('/', function () {
    return 'С каждым днём ты становишься сильнее';
});

Route::get('/1', function () {
  return 'Ты идёщь к цели, однажды мечта станет явью';
});

Route::get('/{name}', function ($name) {
  return "$name" . ', я верю в тебя';
});

Route::get('/name/{name}/{surname}', function ($name, $surname ) {
  return "$name $surname" . ', ты сможешь всё';
});

Route::get('/city/{city?}', function ($city = 'краснодар') {
  return "$city, самый хороший город";
});

Route::get('/number/{id}', function ($id) {
  return "$id страница";
})->where('id', '[0-9]+');

Route::get('/user/{user}/{id}', function ($user, $id) {
  return "$user съел $id кортошек";
})->where('user', '[a-z]{2,}')->where('id', '[0-9]+');

Route::get('/today/{day}/{month}/{year}', function ($day, $month, $year) {
  return "Сегодня: $day $month $year";
})->where('day', '[0-9]{1,2}')->where('month', '[0-9]{1,2}')->where('year', '[0-9]{1,4}');

Route::get('/num/{id}', function($id){
  return "$id страниц";
})->whereNumber('id');

Route::get('/color/{color}', function($color){
  return "$color цвет";
})->whereAlpha('color');

Route::get('/lex/{id}', function($id){
  return "этот id: $id";
});

Route::prefix('admin/user')->group(function(){
  Route::get('/', function(){
    return 'этот роуд с префиксом. страница all';
  });
  Route::get('/{id}', function($id){
    return "этот роуд с префиксом. страница $id";
  });
});

Route::get('/fox/{color}', function($color){
 return "цвет лисы $color";
})->name('fox');