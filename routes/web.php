<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UploadgambarController;
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

Route::get('/admin', function () {
    return view('admin.login');
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/data-user', function () {
//     return view('admin.data-user');
// });
// Route::get('/add-user',   function () {
//     return view('admin.crud.add-user');
// });


// Route::get('/add-profile', function () {
//     return view('admin.crud.add-profile');
// });


Route::group(['middleware' => ['auth','ceklevel:admin,user']], function () {
    // Route::get('/administrator', function () {
    //     return view('admin.administrator');
   
    // });
    
    Route::get('/administrator', [AdminController::class, 'administrator'])->name('administrator');

    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('/add-profile', [UploadgambarController::class, 'add'])->name('add-profile');
    Route::post('/simpan-profile', [UploadgambarController::class, 'simpan_profile'])->name('simpan-profile');
    Route::get('/edit-profile/{id}', [UploadgambarController::class, 'edit_profile'])->name('edit-profile');
    Route::post('/update-profile/{id}', [UploadgambarController::class, 'update_profile'])->name('update-profile');
    Route::get('/delete-profile/{id}', [UploadgambarController::class, 'destroy'])->name('delete-profile');
    
    
});

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    Route::get('/add-user', [AdminController::class, 'add'])->name('add-user');
    Route::post('/simpan-user', [AdminController::class, 'simpan_user'])->name('simpan-user');
    Route::get('/data-user', [AdminController::class, 'show'])->name('data-user');
    Route::get('/edit-user/{id}', [AdminController::class, 'edit'])->name('edit-user');
    Route::post('/update-user/{id}', [AdminController::class, 'update'])->name('update-user');
    Route::get('/delete-user/{id}', [AdminController::class, 'destroy'])->name('delete-user');
});

/*
|--------------------------------------------------------------------------
| ROUTE FRONTDEND
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('home');
});


