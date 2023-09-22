<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ExController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users/{id?}',function(){
//     return 'hello world!';
// });

// Route::get('/users/{id?}',function(){
//     return 'hello world!';
// });

// Route::get('/users/{id?}',function(){
//     return 'hello world!';
// })->where(['id'=>'[0-9]+','id'=>'[0-9]+']);

// Route::get('/', function () {
//     return 'Главная страница';
// });

// Route::get('/about', function () {
//     return 'О компании';
// });
// Route::get('/about/news', function () {
//     return 'Новости компании';
// });
// Route::get('/about/news/vacancies', function () {
//     return 'Вакансии';
// });
// Route::get('/about/news/vacancies/', function () {
//     return 'Партнерство';
// });

// Route::get('/catalog', function () {
//     return 'Католог товаров';
// });
// Route::get('/catalog/constructionMaterials', function () {
//     return 'Стройматериалы';
// });
// Route::get('/catalog/constructionMaterials/tools', function () {
//     return 'Инструменты';
// });
// Route::get('/catalog/constructionMaterials/tools/decorationMaterials', function () {
//     return 'Отделочные материалы';
// });
// Route::get('/catalog/constructionMaterials/tools/decorationMaterials/lamps', function () {
//     return 'Лампы';
// });
// Route::get('/catalog/constructionMaterials/tools/decorationMaterials/lamps/Appliances', function () {
//     return 'Бытовая техника';
// });
// Route::get('/catalog/constructionMaterials/tools/decorationMaterials/lamps/appliances/door', function () {
//     return 'Двери';
// });

// Route::get('/delivery', function () {
//     return 'Доставка';
// });
// Route::get('/delivery/aroundTown', function () {
//     return 'Доставка по городу';
// });
// Route::get('/delivery/aroundTown/aroundTheCountry', function () {
//     return 'Доставка по стране';
// });

// Route::get('/сontactInformation', function () {
//     return 'контакная информация';
// });

// Route::get('/users',[UserController::class,'index']);

// Route::get('/posts', function () {
//     return 'Список постов';
// });
// Route::get('/posts/{id}', function ($id) {
//     return 'User '.$id;
// });
// Route::get('/user/{name?}', function ($name='Вася') {
//     return $name;
// });
// Route::get('/user/{id}', function ($name) {
//     return 'User';
// })->where('id','[0-9]+');
// Route::get('/user/{id}/{name}', function () {
//     return 'User';
// })->where(['id'=>'[0-9]+','name'=>'[a-z]{3,15}']);

Route::get('/test/test/{param}', [TestController::class,'test']);
Route::get('/test/show/{param}', [ExController::class,'show']);
Route::get('/test/show/user/{param}', [EmployeeController::class,'show']);
Route::get('/music', [MainController::class,'asMusic']);
Route::get('/music/team/{idTeam}', [MainController::class,'asTeam']);
Route::get('/test/views', [EmployeeController::class,'showTest']);