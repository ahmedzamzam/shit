<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Support\Facades\Mail;
Route::group(['middleware' => ['web']], function() {
    Route::get('/', function () {
        return view('index');
    })->name('index');

    Route::post('/signin', [
        'uses' => 'UserController@postSignIn',
        'as' => 'signin'
    ]);

    Route::get('/dashboard', [
        'uses' => 'UserController@getDashboard',
        'as' => 'dashboard',
        'middleware' => 'auth'
    ]);

    Route::get('/homepage', [
        'uses' => 'UserController@getHomepage',
        'as' => 'homepage',
        'middleware' => 'auth'
    ]);
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/signup', function () {
        return view('signup');
    })->name('signup');


    Route::post('/adduser', [
        'uses' => 'UserController@postAddNewUser',
        'as' => 'user.add',
        'middleware' => 'auth'
    ]);

    Route::get('/home', [
        'uses' => 'UserController@getHome',
        'as' => 'home',
        'middleware' => 'auth'
    ]);

    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'logout'
    ]);

    Route::get('/inbox', [
        'uses' => 'MessageController@getInbox',
        'as' => 'inbox',
        'middleware' => 'auth'
    ]);

    Route::get('/outbox', [
        'uses' => 'MessageController@getOutbox',
        'as' => 'outbox',
        'middleware' => 'auth'
    ]);

    Route::get('/newmessage',[
        'uses' => 'MessageController@getNewMessage',
        'as' => 'message.new',
        'middleware' => 'auth'
    ]);

    Route::post('/sendmessage',[
        'uses' => 'MessageController@postSendMessage',
        'as' => 'message.send',
        'middleware' => 'auth'
    ]);

    Route::get('/viewmessage/{message_id}', [
        'uses' => 'MessageController@getViewMessage',
        'as' => 'message.view',
        'middleware' => 'auth'
    ]);
    Route::get('/service', [
        'uses' => 'ServiceController@getAddService',
        'as' => 'service',
        'middleware' => 'auth'
    ]);

    Route::post('/addservice', [
        'uses' => 'ServiceController@postAddService',
        'as' => 'service.add',
        'middleware' => 'auth'
    ]);

    Route::get('/services', [
        'uses' => 'ServiceController@getServices',
        'as' => 'services',
        'middleware' => 'auth'
    ]);

    Route::post('/editservices', [
        'uses' => 'ServiceController@postEditServices',
        'as' => 'services.edit',
        'middleware' => 'auth'
    ]);

    Route::get('/deleteservice/{id}', [
        'uses' => 'ServiceController@getDeleteService',
        'as' => 'service.delete',
        'middleware' => 'auth'
    ]);

    Route::get('/editservice/{id}', [
        'uses' => 'ServiceController@getEditService',
        'as' => 'service.edit',
        'middleware' => 'auth'
    ]);

    Route::post('/editservice', [
        'uses' => 'ServiceController@postEditService',
        'as' => 'service.post.edit',
        'middleware' => 'auth'
    ]);

    Route::post('/email',[
        'uses' =>'mailController@smail',
        'as' =>'email'
    ]);

    Route::get('ph', function(){
        return View('ph');
    })->name('ph');

    Route::get('vis', function(){
        return View('vis');
    })->name('vis');

    Route::get('contactus', function(){
        return View('contactus');
    })->name('contactus');

    Route::get('devweb', function(){
        return View('devweb');
    })->name('devweb');

    Route::get('index', function(){
        return View('index');
    })->name('index');

    Route::get('adcamp', function(){
        return View('adcamp');
    })->name('adcamp');

    Route::get('cusdata', function(){
        return View('cusdata');
    })->name('cusdata');

    Route::get('managesm', function(){
        return View('managesm');
    })->name('managesm');

    Route::get('jobapp', function(){
        return View('jobapp');
    })->name('jobapp');

    Route::get('comiden', function(){
        return View('comiden');
    })->name('comiden');

    Route::get('mob', function(){
        return View('mob');
    })->name('mob');

    Route::get('aboutus', function(){
        return View('aboutus');
    })->name('aboutus');

});