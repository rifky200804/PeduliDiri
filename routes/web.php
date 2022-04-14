<?php

// use Illuminate\Routing\Route;
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


Route::group(['middleware' => ['auth','role:admin','revalidate']], function () {

    Route::get('/user/data','UserController@index')->name('user.data');
    Route::get('/user/create', 'UserController@create')->name('user.create');
    Route::post('/user/store', 'UserController@store')->name('user.store');
    Route::get('/user/detail/{id}', 'UserController@detail')->name('user.detail');
    
    Route::get('/user/delete/{id}','UserController@delete')->name('user.delete');
    Route::get('/user/cetak_pdf','UserController@cetak_pdf')->name('user.cetak_pdf');

    
});

Route::group(['middleware'=>['auth','revalidate']],function(){
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/perjalanan/data', 'PerjalananController@getData')->name('perjalanan.data');
    Route::get('/perjalanan/create', 'PerjalananController@create')->name('perjalanan.create');
    Route::post('/perjalanan/save', 'PerjalananController@saveData')->name('perjalanan.save');
    Route::get('/perjalanan/delete/{id}','PerjalananController@delete')->name('perjalanan.delete');
    
    Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');
    Route::put('/user/update/{id}','UserController@update')->name('user.update');
    Route::get('/user/show/{id}','UserController@show')->name('user.show');
});


Route::get('/',function(){
    if(isset(Auth::user()->id)){
        return redirect()->route('dashboard');
    }
    return view('index');
})->name('welcome');

Route::get('/perjalanan/cetak_pdf','PerjalananController@cetak_pdf')->name('perjalanan.cetak_pdf');

Route::get('/register', 'AuthController@register')->name('register');
Route::post('/store', 'AuthController@store')->name('store');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin')->name('postlogin');
Route::get('/logout','AuthController@logout')->name('logout');
