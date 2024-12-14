<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function showHome()
    {
        return view('welcome');
    }
    
    public function showUser(string $name)
    {
        //return view('user', ['name'=>$name]);
        return view('user', compact('name')); //duitai same kaj kre
    }

    public function showBlog()
    {
        return view('blog'); 
    }
}
