<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomepageController;
use App\Http\Controllers\front\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/panel' , [DashboardController::class, 'index'])->name('panel');
Route::get('/update/{id}' , [DashboardController::class, 'update']);
Route::get('/insertPage' , [DashboardController::class, 'insertPage'])->name('insertPage');
Route::get('/delete/{id}' , [DashboardController::class, 'delete']);
Route::get('category1/{id}', [DashboardController::class, 'category']);
Route::view('/registerPage' , 'auth/register');
Route::view('/loginPage' , 'auth/login');

Route::middleware(['throttle:global'])->group(function () {
    Route::post('/updatePost' , [DashboardController::class, 'updatePost'])->name('updatePost');
    Route::post('/insert' , [DashboardController::class, 'insert'])->name('insert');
});

// Front Routes
Route::resource('/blog', HomepageController::class);
Route::get('category/{id}', [CategoryController::class, 'index']);

//Auth Routes

Route::get('/logout' , function(){
    if( session()->has('id')){
        session()->pull('id');
           session()->invalidate();
        session()->regenerateToken();
    }
    return redirect('loginPage');
});

Route::middleware(['throttle:global'])->group(function () {
    Route::post('/login', [AuthController::class , 'login'] );
    Route::post('/register', [AuthController::class , 'register'] )->name('register');
});
