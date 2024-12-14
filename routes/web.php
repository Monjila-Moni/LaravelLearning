<!-- php artisan make::controller controller_name diye controller create kra hoice-->
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\TestingController;

// Route::get('/', [pageController::class, 'showHome'])->name('home');
// Route::get('/user', [pageController::class, 'showBlog'])->name('blog');
// Route::get('/user/{name}', [pageController::class, 'showUser'])->name('userName');

Route::controller(pageController::class)->group(function() {
    Route::get('/','showHome')->name('home');
    Route::get('/user', 'showBlog')->name('blog');
    Route::get('/user/{name}','showUser')->name('userName');
});

Route::get('/test',TestingController::class)->name('test');

?>