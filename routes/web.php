<?php

use Illuminate\Support\Facades\Route;
function getUsers(){
    return [
        1=>['name'=>'moni', 'phone'=>'0188999900', 'city'=>'dhaka'],
        2=>['name'=>'mon', 'phone'=>'0188999900', 'city'=>'khulna'],
        3=>['name'=>'monjila', 'phone'=>'0188999900', 'city'=>'dhaka'],
        4=>['name'=>'elora', 'phone'=>'0188999900', 'city'=>'rangpur'],
    ];
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    //first way as an array
    // return view('users', ['name' => 'moni', 'city' => '<script> alert("Dhaka");</script>']);
    //2nd way by with
    // return view('users')->with('user', 'moni')->with('city','Dhaka');
    //3rd way
    //return view('users')->withUser('Moni')->withCity('');
    $names = getUsers();
    return view('users',['user'=>$names,'city'=>'Dhaka']);

});

Route::get('/user{id}', function ($id) {
    $users = getUsers();
    abort_if(!isset($users[$id]), 404);
    $user = $users[$id];
    return view('user',['id' => $user]);
    //return "<h1>". $id. "</h1>";
})->name('viewUser');