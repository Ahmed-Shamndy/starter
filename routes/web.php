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
   // $data=[];
    //$data['id']=5;
    //$data['name']='Ahmed Shamndy';

    $asd=['Ahmed Shamndy','26','Network Engineer'];
    return view('welcome',compact('asd'));
});

//required parameter
Route::get('/test2/{id}', function ($id) {
    return $id;
})->name('a');

//non - required parameter
Route::get('/test3/{id?}', function () {
    return "welcome";
})->name('b');

//namespace example {instead of writing Front/UserController with Every function }
Route::namespace('Front')->group(function (){

    //all routes will access controller or methods in front name name Front
    Route::get('users','UserController@showUserName');
});

//prefix example for rearranging code
Route::prefix('users')->group(function (){
   Route::get('show','UserControllers@showUserName');
});
Route::group(['prefix'=>'users','middleware'=>'auth'],function (){
   set all Routes
    Route::get('/',function (){
        return 'Work';
    });
    Route::get('show','Front/UserController@showUserName');
    Route::delete('delete','UserController@showUserName');
    Route::get('edit','UserController@showUserName');
    Route::put('update','UserController@showUserName');

});

Route::get('login',function (){
    return 'you Must be logging to use this method';
})->name('login');
// second way to write the Middleware
Route::get('check',function (){
    return 'middleeware';
})->middleware('auth');

Route::resource('news','NewsController');

Route::get('landing',function (){
    return view('landing');
});

Route::get('aboutus',function (){
    return view('aboutus');
});
*/

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
