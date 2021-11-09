<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

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

// SITE NAMESPACE 

    Route::get('/', [HomeController::class, '__invoke']);
    
    Route::get('produtos', [CategoryController::class, 'index']);
    Route::get('produtos/{slug}', [CategoryController::class, 'show']);
    
    Route::get('blog', [BlogController::class, '__invoke']);

    Route::view('sobre', 'site.about.index');

    Route::get('contato', [ContactController::class, 'index']);
    Route::post('contato', [ContactController::class, 'form']);



