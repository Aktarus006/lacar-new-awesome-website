<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Models\Category;
use App\Models\Kit;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', [PageController::class, 'index'])->name('home');

// Kits route
Route::get('/p/{kit:slug}', function (Kit $kit) {
    return view('kits.view', ['kit' => $kit]);
});

// Pages
Route::get('/software', function () {
    return view('layouts.pages.software');
});

Route::get('/services', function () {
    return view('layouts.pages.services');
});

Route::get('/solutions', function () {
    return view('layouts.pages.solutions');
});

Route::get('/restricted', [LoginController::class, 'restricted'])->middleware('littlegatekeeper');


Route::get('/login', [LoginController::class, 'createForm']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/contact', [ContactFormController::class, 'createForm']);
Route::post('/contact', [ContactFormController::class, 'contactForm'])->name('contact.store');

Route::get('/file/{id}', [DocumentController::class, 'show'])->name('downloadFile');

Route::get('/admin/usefuldocs', function () {
    return view('layouts.usefuldocs');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// Categories
Route::get('/{category:slug}', function (Category $category) {
    return view('categories.view', ['category' => $category]);
})->name('category');
