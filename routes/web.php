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

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::post('pagebuilder/folder/store', [
        'as' => 'pagebuilder.folder.store',
        'uses' => 'PageBuilderController@folderStore'
    ]);
    Route::resource('pagebuilder', 'PageBuilderController');
    Route::resource('pagetemplatebuilder', 'PageTemplateBuilderController');
    
    Route::get('webforms', function(){
        return view('admin.webforms.index');
    });
    Route::get('webforms-properties', function(){
        return view('admin.webforms.addforms.index');
    });
    Route::get('webformscreate', function(){
        return view('admin.webforms.addforms.create');
    });

});


/*frontend routes*/
Route::group(['as' => 'app.', 'namespace' => 'App'], function () {
    Route::get('/{path}', 'RouteHandlerController@index');
    //Route::get('{path}/{any?}', 'App\RouteHandlerController@index')->where('any', '(.*)');
});
/*Route::get('{path}/{any?}', 'App\TestController@index')->where('any', '(.*)');*/


