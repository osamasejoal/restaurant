<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FrontendController, CuisineController, CategoryController};

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();



/*
|--------------------------------------------------------------------------
|                          FrontendController
|--------------------------------------------------------------------------
*/
Route::get('/', [FrontendController::class, 'frontpage'])->name('frontpage');



/*
|--------------------------------------------------------------------------
|                          HomeController
|--------------------------------------------------------------------------
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/*
|--------------------------------------------------------------------------
|                          CuisineController
|--------------------------------------------------------------------------
*/
Route::resource('cuisine', CuisineController::class);
Route::get('/cuisine/status/change', [CuisineController::class, 'cuisineStatus'])->name('cuisine.status');



/*
|--------------------------------------------------------------------------
|                          CategoryController
|--------------------------------------------------------------------------
*/
Route::resource('category', CategoryController::class);
Route::get('/category/status/change', [CategoryController::class, 'categoryStatus'])->name('category.status');
