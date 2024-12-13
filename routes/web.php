<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    //first way as an array
    // return view('users', ['name' => 'moni', 'city' => '<script> alert("Dhaka");</script>']);
    //2nd way by with
    // return view('users')->with('user', 'moni')->with('city','Dhaka');
    //3rd way
    return view('users')->withUser('Moni')->withCity('');
});