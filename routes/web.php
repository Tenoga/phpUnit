<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/urlTest', function () {
    return "This is a URL successful TEST";
});
Route::get('/ola', function () {
    return "ola bom dia";
});
Route::view('profile', 'profile');
Route::Post('/profile', [ProfileController::class, 'upload']);