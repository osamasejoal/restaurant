<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FrontendController, CuisineController, CategoryController, FoodController, ProfileController, UserController, CompanyInfoController, CompanySocialController};
use phpDocumentor\Reflection\Types\Resource_;

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
|                          ProfileController
|--------------------------------------------------------------------------
*/
Route::get('/your/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/your/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/your/password/change', [ProfileController::class, 'editPass'])->name('profile.password.change');
Route::post('/your/password/change', [ProfileController::class, 'updatePass'])->name('profile.password.update');




/*
|--------------------------------------------------------------------------
|                          UserController
|--------------------------------------------------------------------------
*/
Route::resource('user', UserController::class);
Route::get('/user/list/{id}', [UserController::class, 'view'])->name('user.view');
Route::get('/user/status/change', [UserController::class, 'userStatus'])->name('user.status');




/*
|--------------------------------------------------------------------------
|                          CompanyInfoController
|--------------------------------------------------------------------------
*/
Route::resource('companyInfo', CompanyInfoController::class);




/*
|--------------------------------------------------------------------------
|                          CompanySocialController
|--------------------------------------------------------------------------
*/
Route::resource('companySocial', CompanySocialController::class);
Route::get('/social/status/change', [CompanySocialController::class, 'socialStatus'])->name('social.media.status');




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



/*
|--------------------------------------------------------------------------
|                          FoodController
|--------------------------------------------------------------------------
*/
Route::resource('food', FoodController::class);
Route::get('/food/status/change', [FoodController::class, 'foodStatus'])->name('food.status');
Route::post('/food/name/update/{id}', [FoodController::class, 'updateName'])->name('food.name.update');
