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


Route::namespace('Site')->group(function(){
    
    Route::get('/', 'HomeController@index')->name('site.home.index');

    Route::get('/panel/members', 'MemberController@index')->name('site.panel.member.index');
    Route::get('/members/new', 'MemberController@create')->name('site.panel.member.create');
    Route::post('/members/new/store', 'MemberController@store')->name('site.panel.member.store');
    Route::get('/panel','PanelController@index')->name('site.panel.index');
});