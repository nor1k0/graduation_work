<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;//追記
use App\Http\Controllers\ListController;

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


Route::get('/',[ListController::class,'index'])->name('welcome');;
Route::get('/manual/{book}',[ListController::class,'show']);

Route::post('/manual/{book}/favorite', [ListController::class, 'favorite'])->name('list.favorite');
Route::delete('/manual/{book}/unfavorite', [ListController::class, 'unfavorite'])->name('list.unfavorite');



Route::get('/dashboard', function () {
    return view('mypage');
})->middleware(['auth', 'verified'])->name('dashboard');


// Book用の一括ルーティング
Route::resource('books', BookController::class);

// // プレミア会員用のルーティング
 Route::group(['middleware' => ['auth', 'can:premier']], function () {

// // Book用の一括ルーティング
 Route::resource('books', BookController::class);
  
 });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
