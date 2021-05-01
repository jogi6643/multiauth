<?php

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

Route::get('/', function () {
 
    return view('welcome');
});
Route::get('admin/onetoone','ElequentController@onetoone');
Route::get('admin/onetomany','ElequentController@onetomany');
Route::get('admin/add-roles','ElequentController@add_roles');
Route::get('admin/add-users','ElequentController@add_users');
Route::get('admin/getAlluserbyrole/{id}','ElequentController@getAlluserbyrole');
Route::get('admin/getAllrolebyuser/{id}','ElequentController@getAllrolebyuser');
Route::get('admin/softdelete','ElequentController@softdelete');
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

// // Admin Router
// // Route::group(['prefix'=>'admin', 'as'=>'admin.'], function(){
Route::group(['prefix'=>'admin','middleware'=>['is_admin']],function(){

Route::get('dashboard', 'HomeController@adminHome')->name('admin.home');
});
// });

// // User Router

// // Route::group(['prefix'=>'user','as'=>'user.'],function(){
    Route::group(['prefix'=>'usertest','middleware'=>['is_user']],function(){
      Route::get('dashboard', 'HomeController@userHome')->name('home');
    });

// });


// class Service
// {
//     //
// }

// Route::get('/', function (Service $service) {
//     die(get_class($service));
// });