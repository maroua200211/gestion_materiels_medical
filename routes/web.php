<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\AuthLoginController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/login', 'AuthLoginController@showLoginForm')->name('login');
/*Route::get('/login', function () {
    return view('auth.login');
})->name('login');*/
Route::get('/login', 'AuthLoginController@showLoginForm')->name('login');


//Route::get('/login', [AuthLoginController::class, 'showLoginForm'])->name('login');

/*Route::middleware(['auth'])->group(function () {
    // Vos routes protégées ici, y compris la route "products"
    Route::get('/products', 'ProductController@index')->name('products');*/
//});


Route::get('/products', 'ProductController@index')->name('products');




//Route::resource('products',ProductController::class) ;