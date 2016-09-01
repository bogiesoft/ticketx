<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', [
    'as' => 'home', 'uses' => 'PageController@home'
        ]);

    Route::get('/login', [
        'uses' => 'Auth\AuthController@getLogin',
        'as'   => 'auth.login',
        'middleware' => ['guest']
    ]);

    Route::post('/login', [
        'uses' => 'Auth\AuthController@postLogin',
        'middleware' => ['guest']
    ]);

    // Password Reset Routes...
    Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\PasswordController@reset');

    // Social Authentication
    Route::get('/auth/{provider}', 'OauthController@authenticate');

    Route::get('/account', [
        'uses' => 'AccountController@getAccountPage',
        'as'   => 'account.dashboard',
        'middleware' => ['auth']
    ]);

    Route::post('/account/profile', [
        'uses' => 'AccountController@updateProfile',
        'as'   => 'account.profile',
        'middleware' => ['auth']
    ]);

    Route::post('/account/photo', [
        'uses' => 'AccountController@updateAvatar',
        'as'   => 'account.avatar',
        'middleware' => ['auth']
    ]);

    Route::post('/account/password', [
        'uses' => 'AccountController@changePassword',
        'as'   => 'account.password',
        'middleware' => ['auth']
    ]);

    Route::post('/account/delete/now', [
        'uses' => 'AccountController@deleteAccount',
        'as'   => 'account.delete.now',
        'middleware' => ['auth']
    ]);


    Route::get('/account/confirm/delete', [
        'uses' => 'AccountController@redirectToConfirmDeletePage',
        'as'   => 'account.confirm.delete',
        'middleware' => ['auth']
    ]);

    Route::get('/account/delete/later', [
        'uses' => 'AccountController@dontDeleteAccount',
        'as'   => 'account.dont.delete',
        'middleware' => ['auth']
    ]);

    Route::get('/signup', [
        'uses' => 'Auth\AuthController@getRegister',
        'as'   => 'auth.register',
        'middleware' => ['guest']
    ]);

    Route::get('logout', [
        'uses' => 'Auth\AuthController@logout',
        'as' => 'logout',
    ]);

    Route::post('/signup', [
        'uses' => 'Auth\AuthController@postRegister',
        'middleware' => ['guest']
    ]);

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::post('/contact', [
        'uses' => 'ContactController@sendMessage',
        'as'   => 'contact'
    ]);
    
    Route::group(['middleware' => ['auth']], function() {
        
        Route::get('tickets', 'TicketsController@userTickets')->name('tickets.index');
        Route::get('tickets/create', 'TicketsController@create')->name('tickets.create');
        Route::post('tickets/store', 'TicketsController@store'); 
        Route::get('tickets/{ticket_id}', 'TicketsController@show')->name('tickets.show');
        
        Route::post('comment', 'CommentController@postComment')->name('tickets.comment');
        Route::post('reopen/{ticket_id}', 'TicketsController@reopen');         
    
        Route::group(['prefix' => 'admin'], function() {
         
            Route::get('/', ['as'=>'admin.dashboard','uses'=>'AdminController@index','middleware' => ['permission:view-backend']]);
 
            Route::get('settings', ['as'=>'settings.index','uses'=>'SettingsController@show','middleware' => ['permission:manage-settings']]);
            Route::patch('settings/update', ['as'=>'settings.update','uses'=>'SettingsController@update','middleware' => ['permission:manage-settings']]);
 
            Route::get('users/create', ['as'=>'users.create','uses'=>'UserController@create','middleware' => ['permission:manage-users']]);       
            Route::post('users/create',['as'=>'users.store','uses'=>'UserController@store','middleware' => ['permission:manage-users']]);
            Route::get('users', ['as'=>'users.index','uses'=>'UserController@index','middleware' => ['permission:manage-users']]);
            Route::get('users{id}/edit', ['as'=>'users.edit','uses'=>'UserController@edit','middleware' => ['permission:manage-users']]);
            Route::get('users/{id}',['as'=>'users.show','uses'=>'UserController@show','middleware' => ['permission:manage-users']]);
        	Route::patch('users/{id}',['as'=>'users.update','uses'=>'UserController@update','middleware' => ['permission:manage-users']]);
        	Route::delete('users/{id}',['as'=>'users.destroy','uses'=>'UserController@destroy','middleware' => ['permission:manage-users']]);    
            
        	Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:manage-roles']]);
        	Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:manage-roles']]);
        	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:manage-roles']]);
        	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show','middleware' => ['permission:manage-roles']]);
        	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:manage-roles']]);
        	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:manage-roles']]);
        	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:manage-roles']]);
        	
        	Route::get('permissions',['as'=>'permissions.index','uses'=>'PermissionController@index','middleware' => ['permission:manage-permissions']]);
        	Route::get('permissions/create',['as'=>'permissions.create','uses'=>'PermissionController@create','middleware' => ['permission:manage-permissions']]);
        	Route::post('permissions/create',['as'=>'permissions.store','uses'=>'PermissionController@store','middleware' => ['permission:manage-permissions']]);
        	Route::get('permissions/{id}',['as'=>'permissions.show','uses'=>'PermissionController@show','middleware' => ['permission:manage-permissions']]);
        	Route::get('permissions/{id}/edit',['as'=>'permissions.edit','uses'=>'PermissionController@edit','middleware' => ['permission:manage-permissions']]);
        	Route::patch('permissions/{id}',['as'=>'permissions.update','uses'=>'PermissionController@update','middleware' => ['permission:manage-permissions']]);
        	Route::delete('permissions/{id}',['as'=>'permissions.destroy','uses'=>'PermissionController@destroy','middleware' => ['permission:manage-permissions']]);       
    	
            Route::post('tickets/comment', ['as'=>'managetickets.comment','uses'=>'AdminCommentController@postComment','middleware' => ['permission:manage-tickets']]);
            Route::get('tickets', ['as'=>'managetickets.index','uses'=>'AdminTicketController@index','middleware' => ['permission:manage-tickets']]);
            Route::get('tickets/open', ['as'=>'managetickets.open','uses'=>'AdminTicketController@opentickets','middleware' => ['permission:manage-tickets']]);
            Route::get('tickets/closed', ['as'=>'managetickets.closed','uses'=>'AdminTicketController@closedtickets','middleware' => ['permission:manage-tickets']]);
            Route::get('tickets/inprogress', ['as'=>'managetickets.inprogress','uses'=>'AdminTicketController@inprogresstickets','middleware' => ['permission:manage-tickets']]);
            Route::get('tickets/reopened', ['as'=>'managetickets.reopened','uses'=>'AdminTicketController@reopenedtickets','middleware' => ['permission:manage-tickets']]);
            Route::get('tickets/{ticket_id}', ['as'=>'managetickets.show','uses'=>'AdminTicketController@show','middleware' => ['permission:manage-tickets']]);       
            Route::get('tickets/{ticket_id}/edit', ['as'=>'managetickets.edit','uses'=>'AdminTicketController@edit','middleware' => ['permission:manage-tickets']]);
            Route::patch('tickets/{ticket_id}', ['as'=>'managetickets.update','uses'=>'AdminTicketController@update','middleware' => ['permission:manage-tickets']]); 
            Route::delete('tickets/{ticket_id}',['as'=>'managetickets.destroy','uses'=>'AdminTicketController@destroy','middleware' => ['permission:manage-tickets']]);        
        });  
    });
});
