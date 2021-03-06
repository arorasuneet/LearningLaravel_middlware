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


// In case we have multiple middlewares, we can specify as follows:
// Route::get('/admin/user/roles', ['middleware'=>['role', 'web', 'mobile'], function(){
Route::get('/admin/user/roles', ['middleware'=>'role', function(){

    return "Middleware role";

}]);

Route::get('/admin', 'AdminController@index');
