<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Livewire\Home;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route::resource('photos', PhotoController::class);
Route::get('/photos', [PhotoController::class, 'index']);

// General Way
Route::get('/test1', function () {
   return 'Test Page';
});
//Route::get('/posts', [PostController::class, 'index']);
Route::resource('posts', PostController::class);

Route::get('/home' , App\Http\Livewire\Home::class);

//Route::view('users','livewire.home');
Route::get('/post2', Home::class);

