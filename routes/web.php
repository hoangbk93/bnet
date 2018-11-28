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
Route::get('test',function(){
  return view('test');
});


// post api qua 1 link api
Route::get('postapi','ApiController@getApi');
Route::post('postapi','ApiController@postApi');

Route::get('loginsms','UserController@getLoginsms');
Route::post('loginsms','UserController@postLoginsms');
Route::get('loginsmsverify','UserController@getLoginsmsVerify');
Route::post('loginsmsverify','UserController@postLoginsmsVerify');

Route::get('dashboard','UserController@dashboard');

Route::get('phanquyen',function(){
    return view('phanquyen');
});

Route::group(['prefix'=>'admin/'],function(){
  Route::group(['prefix'=>'user/'],function(){
    Route::get('view','UserController@view');
    Route::get('add','UserController@getAdd');
    Route::post('add','UserController@postAdd');
    Route::get('edit/{id}','UserController@getEdit');
    Route::post('edit/{id}','UserController@postEdit');
    Route::get('delete/{id}','UserController@delete');
  });
  Route::group(['prefix'=>'admin/'],function(){
    Route::get('view','AdminController@view');
    Route::get('add','AdminController@getAdd');
    Route::post('add','AdminController@postAdd');
    Route::get('edit/{id}','AdminController@getEdit');
    Route::post('edit/{id}','AdminController@postEdit');
    Route::get('delete/{id}','AdminController@delete');
  });
  Route::group(['prefix'=>'app/'],function(){
    Route::get('view','AppController@view');
    Route::get('add','AppController@getAdd');
    Route::post('add','AppController@postAdd');
    Route::get('edit/{id}','AppController@getEditr');
    Route::post('edit/{id}','AppController@postEdit');
    Route::get('delete/{id}','AppController@delete');
  });
  Route::group(['prefix'=>'quyen-nguoi-dung/'],function(){
    Route::get('view','QuyenNguoiDungController@view');
    Route::get('add','QuyenNguoiDungController@getAdd');
    Route::post('add','QuyenNguoiDungController@postAdd');
    Route::get('edit/{id}','QuyenNguoiDungController@getEditr');
    Route::post('edit/{id}','QuyenNguoiDungController@postEdit');
    Route::get('delete/{id}','QuyenNguoiDungController@delete');
  });
  Route::get('transation','AppController@transation');
  Route::get('report','AppController@report');
  Route::get('congtachotich','AppController@congtachotich');
  Route::post('congtachotich','AppController@postCongtachotich');
  Route::get('chitietdientu','AppController@chitietdientu');
  Route::get('useronline','AppController@userOnline');
  Route::get('apponline','AppController@appOnline');
});
