<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
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
    Route::get('/administrator', function () {
        return view('admin.administrator');
   
    });
    
    // Route::get('/administrator', [AdminController::class, 'administrator'])->name('administrator');

    Route::get('/profile', [MenuController::class, 'profile'])->name('profile');
    Route::get('/add-profile', [MenuController::class, 'add'])->name('add-profile');
    Route::post('/simpan-profile', [MenuController::class, 'simpan_profile'])->name('simpan-profile');
    Route::get('/edit-profile/{id}', [MenuController::class, 'edit_profile'])->name('edit-profile');
    Route::post('/update-profile/{id}', [MenuController::class, 'update_profile'])->name('update-profile');
    Route::get('/delete-profile/{id}', [MenuController::class, 'destroy'])->name('delete-profile');

    //beranda
    Route::get('/beranda', [MenuController::class, 'beranda'])->name('beranda');
    Route::get('/add-beranda', [MenuController::class, 'add_beranda'])->name('add-beranda');
    Route::post('/simpan-beranda', [MenuController::class, 'simpan_beranda'])->name('simpan-beranda');
    Route::get('/edit-beranda/{id}', [MenuController::class, 'edit_beranda'])->name('edit-beranda');
    Route::post('/update-beranda/{id}', [MenuController::class, 'update_beranda'])->name('update-beranda');
    Route::get('/delete-beranda/{id}', [MenuController::class, 'destroy_beranda'])->name('delete-beranda');
    
    //spot
    Route::get('/spot-pantai', [MenuController::class, 'spot'])->name('spot-pantai');
    Route::get('/add-spot', [MenuController::class, 'add_spot'])->name('add-spot');
    Route::post('/simpan-spot', [MenuController::class, 'simpan_spot'])->name('simpan-spot');
    Route::get('/edit-spot/{id}', [MenuController::class, 'edit_spot'])->name('edit-spot');
    Route::post('/update-spot/{id}', [MenuController::class, 'update_spot'])->name('update-spot');
    Route::get('/delete-spot/{id}', [MenuController::class, 'destroy_spot'])->name('delete-spot');
    
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


