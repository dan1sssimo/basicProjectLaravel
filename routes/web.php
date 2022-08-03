<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;


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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all', [ContactController::class, 'allData'])
    ->name('contact-data');

Route::post('/contact/submit', [ContactController::class, 'submit'])
    ->name('contact-form');

Route::get('/contact/all/{id}', [ContactController::class, 'showOneMessage'])
    ->name('contact-data-one');

Route::get('/contact/all/{id}/update', [ContactController::class, 'updateMessage'])
    ->name('contact-update');

Route::post('/contact/all/{id}/update', [ContactController::class, 'updateMessageSubmit'])
    ->name('contact-update-submit');

Route::get('/contact/all/{id}/delete', [ContactController::class, 'deleteMessage'])
    ->name('contact-delete');
