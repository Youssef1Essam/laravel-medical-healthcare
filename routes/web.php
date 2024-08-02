<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SubscriptionController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/department', [App\Http\Controllers\departmentController::class, 'index']);
Route::get('/booking', [App\Http\Controllers\BookController::class, 'index']);
Route::get('/faqs', [App\Http\Controllers\faqsController::class, 'index']);
Route::post('/store-book', [BookController::class, 'store'])->name('store.book');
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe');



require __DIR__.'/auth.php';
