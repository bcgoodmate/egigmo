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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


/*admin routes*/

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::post('pagebuilder/folder/store', [
        'as' => 'pagebuilder.folder.store',
        'uses' => 'PageBuilderController@folderStore'
    ]);
    Route::get('pagebuilder/treeview', [
        'as' => 'pagebuilder.treeview',
        'uses' => 'PageBuilderController@treeview'
    ]);
    Route::resource('pagebuilder', 'PageBuilderController');
    Route::resource('pagetemplatebuilder', 'PageTemplateBuilderController');
    Route::resource('formbuilder', 'FormBuilderController');
    Route::resource('webform', 'WebformController');
    Route::resource('systememails', 'SystemEmailsController');

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

    Route::get('systememails-index', function () {
        return view('admin.systememails.index');
    });

    Route::get('menus-edit-details', function () {
        return view('admin.menus.edit.details');
    });

    Route::get('menus-edit-menu', function () {
        return view('admin.menus.edit.menu');
    });

    Route::get('menus-edit-menulook', function () {
        return view('admin.menus.edit.menu-look');
    });

    Route::get('menus-edit-itemslook', function () {
        return view('admin.menus.edit.items-look');
    });

    Route::get('systempages-custom', function () {
        return view('admin.systempages.custom.custom');
    });

    Route::get('PasswordRetrieveEmail', function () {
        return view('admin.systememails.custom.PasswordRetrieveEmail');
    });
    Route::get('Invoice', function () {
        return view('admin.systememails.custom.Invoice');
    });
    Route::get('OrderStatusChanged', function () {
        return view('admin.systememails.custom.OrderStatusChanged');
    });
    Route::get('Quote', function () {
        return view('admin.systememails.custom.Quote');
    });
    Route::get('GiftVoucher', function () {
        return view('admin.systememails.custom.GiftVoucher');
    });
    Route::get('DropShipping', function () {
        return view('admin.systememails.custom.DropShipping');
    });
    Route::get('FirstCartRecoveryEmail', function () {
        return view('admin.systememails.custom.FirstCartRecoveryEmail');
    });
    Route::get('SecondCartRecoveryEmail', function () {
        return view('admin.systememails.custom.SecondCartRecoveryEmail');
    });
    Route::get('DoubleOpt', function () {
        return view('admin.systememails.custom.DoubleOpt');
    });
    Route::get('SecureZoneLoginDetails', function () {
        return view('admin.systememails.custom.SecureZoneLoginDetails');
    });
    Route::get('AffiliateProgramDetails', function () {
        return view('admin.systememails.custom.AffiliateProgramDetails');
    });
    Route::get('TellFriend', function () {
        return view('admin.systememails.custom.TellFriend');
    });
    Route::get('ForumsSubscriberAlert', function () {
        return view('admin.systememails.custom.ForumsSubscriberAlert');
    });
    Route::get('ForumsSubscriberAlertTopics', function () {
        return view('admin.systememails.custom.ForumsSubscriberAlertTopics');
    });
    Route::get('CustomerServiceTicketing', function () {
        return view('admin.systememails.custom.CustomerServiceTicketing');
    });
    Route::get('WorkflowNotification', function () {
        return view('admin.systememails.custom.WorkflowNotification');
    });
    Route::get('3rdPartyWorkflow', function () {
        return view('admin.systememails.custom.3rdPartyWorkflow');
    });
    Route::get('WorkflowTask', function () {
        return view('admin.systememails.custom.WorkflowTask');
    });
    Route::get('WorkflowCompletion', function () {
        return view('admin.systememails.custom.WorkflowCompletion');
    });
    Route::get('WorkflowReminder', function () {
        return view('admin.systememails.custom.WorkflowReminder');
    });
    Route::get('WorkflowEscalation', function () {
        return view('admin.systememails.custom.WorkflowEscalation');
    });
    Route::get('WorkflowRejection', function () {
        return view('admin.systememails.custom.WorkflowRejection');
    });
    Route::get('url-ridirects-index', function () {
        return view('admin.url-ridirects.index');
    });
    Route::get('url-ridirects-import', function () {
        return view('admin.url-ridirects.import');
    });

    Route::get('visitors-overview', function () {
        return view('admin.visitors.overview');
    });

    Route::get('visitors-visitview', function () {
        return view('admin.visitors.visitview');
    });
    Route::get('visitors-geographic', function () {
        return view('admin.visitors.geographic');
    });
    Route::get('visitors-uniquevisitor', function () {
        return view('admin.visitors.uniquevisitor');
    });
    Route::get('visitors-visitorloyalty', function () {
        return view('admin.visitors.visitorloyalty');
    });
    Route::get('visitors-browser', function () {
        return view('admin.visitors.browser');
    });
    Route::get('visitors-opratesystem', function () {
        return view('admin.visitors.opratesystem');
    });
    Route::get('visitors-addresslist', function () {
        return view('admin.visitors.addresslist');
    });
    Route::get('sitedomains-index', function () {
        return view('admin.sitedomains.index');
    });
    Route::get('adminusers-index', function () {
        return view('admin.adminusers.index');
    });
    Route::get('adminusers-invite', function () {
        return view('admin.adminusers.invite');
    });
    Route::get('adminusers-edit', function () {
        return view('admin.adminusers.edit');
    });
    Route::get('userroles-index', function () {
        return view('admin.userroles.index');
    });
    Route::get('userroles-create-details', function () {
        return view('admin.userroles.create.details');
    });
    Route::get('userroles-create-users', function () {
        return view('admin.userroles.create.users');
    });
    Route::get('userroles-create-permission', function () {
        return view('admin.userroles.create.permission');
    });
    Route::get('userroles-edit-details', function () {
        return view('admin.userroles.edit.details');
    });
    Route::get('userroles-edit-users', function () {
        return view('admin.userroles.edit.users');
    });
    Route::get('userroles-edit-permission', function () {
        return view('admin.userroles.edit.permission');
    });
    Route::get('mobilesupport-index', function () {
        return view('admin.mobilesupport.index');
    });
    Route::get('sitemanagement-index', function () {
        return view('admin.sitemanagement.index');
    });
    Route::get('securitysetting-index', function () {
        return view('admin.securitysetting.index');
    });
    Route::get('betafeatures-index', function () {
        return view('admin.betafeatures.index');
    });
    Route::get('filemanager-index', function () {
        return view('admin.filemanager.index');
    });
    Route::get('sitebillings-index', function () {
        return view('admin.sitebillings.index');
    });
    Route::get('workflow', function () {
        return view('admin.call.workflow');
    });
    Route::get('templates-archive', function () {
        return view('admin.pagebuilder.templates.another.archive');
    });



});


/*frontend routes*/
Route::group(['as' => 'app.', 'namespace' => 'App'], function () {
    Route::get('/', 'RouteHandlerController@index');
    Route::get('/{path}', 'RouteHandlerController@index');
    Route::get('{path}/{any?}', 'App\RouteHandlerController@index')->where('any', '(.*)');
});