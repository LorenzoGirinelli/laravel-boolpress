<?php
use Illuminate\Support\Facades\Route;
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
Auth::routes();
Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function() {
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('posts', 'PostController');

        // Categories routes
        Route::get('/categories', 'CategoryController@index')->name('categories');
        Route::get('/categories/{slug}', 'CategoryController@show')->name('category_info');
    });

Route::get('{any?}', function() {
    return view('guests.home');
})->where('any', '.*');
