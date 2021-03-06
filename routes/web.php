<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);

Route::get('contact', [PagesController::class, 'showContactForm'])->name('contact.show');
Route::post('contact', [PagesController::class, 'submitContactForm'])->name('contact.submit');
