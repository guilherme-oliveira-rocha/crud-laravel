<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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
    return view('read');
});

Route::get('/create', [ContactsController::class, 'create']);
Route::post('/create', [ContactsController::class, 'store'])->name('register_contact');
Route::get('/', [ContactsController::class, 'show']);
Route::get('/edit/{id}', [ContactsController::class, 'edit']);
Route::post('/edit/{id}', [ContactsController::class, 'update'])->name('update_contact');
Route::get('/delete/{id}', [ContactsController::class, 'delete']);
Route::post('/delete/{id}', [ContactsController::class, 'destroy'])->name('destroy_contact');



Route::get('/', [ContactsController::class, 'show'])->name('show_contact');

