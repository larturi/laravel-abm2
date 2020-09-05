<?php

// DB::listen(function($query){
//     echo "<pre>{$query->sql}</pre>";
// });

use Illuminate\Support\Facades\Route;
use App\User;
use Carbon\Carbon;

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

// dd(app('hash')->make('123'));

// User::create([

//     'name' => 'Leandro',
//     'email' => 'lea.arturi@gmail.com',
//     'role_id' => 1,
//     'password' => app('hash')->make('123'),
//     'created_at' => Carbon::now(),
//     'updated_at' => Carbon::now()

// ]);


Auth::routes();

Route::get('/', 'PagesController@home')->name('home');

Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludo'])->where('nombre', '[A-Za-z]+');

Route::resource('mensajes', 'MessagesController');

Route::resource('usuarios', 'UsersController');

Route::get('/home', 'HomeController@index')->name('home');


