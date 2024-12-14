<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    /**
     * Handle the incoming request.
     *  "php artisan make:controller TestingController --invokable" 
     * this command should run from terminal to create invokable controller
     * php artisan route:list --except-vendor  kon root kon controller use krtecee ta dekhar command
     * php artisan route:list --path=user
     */
    public function __invoke()
    {
        //ekhan theke view return kra jay
        return view('testing'); //ekhane testing akta view
    }
}
