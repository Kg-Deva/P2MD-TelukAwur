<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('admin.login');
});

// Route::get('/data-user', function () {
//     return view('admin.data-user');
// });
// Route::get('/add-user',   function () {
//     return view('admin.crud.add-user');
// });
Route::get('/profile', function () {
    return view('admin.profile');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth','ceklevel:admin,user']], function () {
    Route::get('/administrator', function () {
        return view('admin.administrator');
    });
    Route::get('/add-user', [AdminController::class, 'add'])->name('add-user');
    Route::post('/simpan-user', [AdminController::class, 'simpan_user'])->name('simpan-user');
    Route::get('/data-user', [AdminController::class, 'show'])->name('data-user');
    Route::get('/edit-user/{id}', [AdminController::class, 'edit'])->name('edit-user');
    Route::post('/update-user/{id}', [AdminController::class, 'update'])->name('update-user');
    Route::get('/delete-user/{id}', [AdminController::class, 'destroy'])->name('delete-user');


});

