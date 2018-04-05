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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*admin routes*/

Route::group(['middleware' => ['auth'],'prefix' => 'admin', 'as' => 'admin.','namespace'  => 'Admin'],function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('pagebuilder', 'PageBuilderController');
    Route::resource('pagetemplate', 'PageTemplateBuilderController');
});






/*frontend routes*/

Route::get('/{path}', 'App\TestController@index')->name('test');
Route::get('{path}/{any?}', 'App\TestController@index')->where('any', '(.*)');


