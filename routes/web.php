<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RoomCategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RoomDetailsController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/', [HomeController::class, 'home'])->name('index');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');

//Room details
Route::get('/room-category', [RoomCategoryController::class, 'roomCategory'])->name('room-category');
Route::get('/room-details/{id}', [RoomCategoryController::class, 'roomDetails'])->name('room-details');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-details', [BlogControllerr::class, 'blogDetails'])->name('blog-details');

// Reservation
Route::get('/reservation', [ReservationController::class, 'reservation'])->name('Hotel.Reservation.View');
Route::post('/search-room-category', [ReservationController::class, 'searchRoomCategory'])->name('Hotel.SearchRoomCategory');
