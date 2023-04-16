<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/single',[HomeController::class,'single']);
Route::get('/login_page',[HomeController::class,'login']);
Route::get('/redirect',[HomeController::class,'loggedIN']);
Route::get('/logout',[HomeController::class,'logout']);
Route::get('/create',[HomeController::class,'create']);
Route::post('/create_post',[HomeController::class,'create_post']);
Route::get('/all_posts',[HomeController::class,'all_posts']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
