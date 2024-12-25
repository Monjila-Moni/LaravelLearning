<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});


Route::controller(UserController::class)->group(function(){

    Route::get('/users', 'showUsers')->name('userspage');
    Route::get('/user/{id}','singleUser')->name('user.view');

    Route::post('/add','addUser')->name('addUser');//form er sahajje data k add update or delete krte post mathod use hoy
    Route::get('/delete/{id}', 'deleteUser')->name('user.delete');
    Route::put('/update/{id}','updateUser')->name('update.user');//form submmit hole ai route use hbe
    Route::get('/updatepage/{id}', 'updatePage')->name('update.page');

});


Route::view("newuser", "/addUser");