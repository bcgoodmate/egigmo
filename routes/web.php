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

    Route::resource('formbuilder', 'FormBuilderController');
    Route::resource('webform', 'WebformController');

    /*new link page*/
    Route::get('contentholders-index', function () {
        return view('admin.contentholders.index');
    });

    Route::get('contentholders-create', function () {
        return view('admin.contentholders.create');
    });

    Route::get('contentholders-edit', function () {
        return view('admin.contentholders.edit');
    });

    Route::get('menus-index', function () {
        return view('admin.menus.index');
    });

    Route::get('menus-create-details', function () {
        return view('admin.menus.create.details');
    });

    Route::get('menus-create-menu', function () {
        return view('admin.menus.create.menu');
    });

    Route::get('menus-create-menulook', function () {
        return view('admin.menus.create.menu-look');
    });

    Route::get('menus-create-itemslook', function () {
        return view('admin.menus.create.items-look');
    });

    Route::get('systempages-index', function () {
        return view('admin.systempages.index');
    });
});


/*frontend routes*/
Route::group(['as' => 'app.', 'namespace' => 'App'], function () {
    Route::get('/{path}', 'RouteHandlerController@index');
    //Route::get('{path}/{any?}', 'App\RouteHandlerController@index')->where('any', '(.*)');
});
/*Route::get('{path}/{any?}', 'App\TestController@index')->where('any', '(.*)');*/


