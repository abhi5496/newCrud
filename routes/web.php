<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(UserController::class)->group(function(){

Route::get('/' ,'showUsers');
Route::get('/user/{id}','singleUser')->name('view.user');
Route::post('/add','addUser')->name('addUser');
Route::put('/update/{id}','updateUser')->name('update.user');
Route::get('/updatepage/{id}','updatePage')->name('update.page');

Route::get('/delete/{id}','deleteUser')->name('delete.user');
Route::get('/deleteuser','deleteAllUser');

Route::view('newuser','/adduser');

});

