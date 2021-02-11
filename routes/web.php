<?php

use Dotenv\Parser\Value;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'AuthController@dashboard')->name('auth.login');

Route::namespace('Site')->group(function(){
    
    Route::get('/', 'HomeController@index')->name('site.home.index');

    Route::namespace('Panel')->group(function(){
        Route::get('/panel','PanelController@index')->name('site.panel.index');

        Route::namespace('User')->group(function(){
            Route::get('/panel/users','UserController@index')->name('site.panel.user.index');
        });
        Route::namespace('Member')->group(function(){
            Route::get('/panel/members', 'MemberController@index')->name('site.panel.member.index');
            Route::get('/members/new', 'MemberController@create')->name('site.panel.member.create');
            Route::post('/members/new/store', 'MemberController@store')->name('site.panel.member.store');
        });
        Route::namespace('Church')->group(function(){
            Route::get('/panel/churches','ChurchController@index')->name('site.panel.church.index');
            Route::get('/panel/churches/new','ChurchController@create')->name('site.panel.church.create');
            Route::post('/churches/new/store','ChurchController@store')->name('site.panel.church.store');
        });
    });

});


