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

Route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function () {
    Route::get('/administrator', [AdminController::class, 'administrator'])->name('administrator');
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

    //kuliner
    Route::get('/kuliner', [MenuController::class, 'kuliner'])->name('kuliner');
    Route::get('/add-kuliner', [MenuController::class, 'add_kuliner'])->name('add-kuliner');
    Route::post('/simpan-kuliner', [MenuController::class, 'simpan_kuliner'])->name('simpan-kuliner');
    Route::get('/edit-kuliner/{id}', [MenuController::class, 'edit_kuliner'])->name('edit-kuliner');
    Route::post('/update-kuliner/{id}', [MenuController::class, 'update_kuliner'])->name('update-kuliner');
    Route::get('/delete-kuliner/{id}', [MenuController::class, 'destroy_kuliner'])->name('delete-kuliner');

    //kontak
    Route::get('/kontak', [MenuController::class, 'kontak'])->name('kontak');
    Route::get('/add-kontak', [MenuController::class, 'add_kontak'])->name('add-kontak');
    Route::post('/simpan-kontak', [MenuController::class, 'simpan_kontak'])->name('simpan-kontak');
    Route::get('/edit-kontak/{id}', [MenuController::class, 'edit_kontak'])->name('edit-kontak');
    Route::post('/update-kontak/{id}', [MenuController::class, 'update_kontak'])->name('update-kontak');
    Route::get('/delete-kontak/{id}', [MenuController::class, 'destroy_kontak'])->name('delete-kontak');

    //penginapan
    Route::get('/penginapan', [MenuController::class, 'penginapan'])->name('penginapan');
    Route::get('/add-penginapan', [MenuController::class, 'add_penginapan'])->name('add-penginapan');
    Route::post('/simpan-penginapan', [MenuController::class, 'simpan_penginapan'])->name('simpan-penginapan');
    Route::get('/edit-penginapan/{id}', [MenuController::class, 'edit_penginapan'])->name('edit-penginapan');
    Route::post('/update-penginapan/{id}', [MenuController::class, 'update_penginapan'])->name('update-penginapan');
    Route::get('/delete-penginapan/{id}', [MenuController::class, 'destroy_penginapan'])->name('delete-penginapan');

    //paket wisata
    Route::get('/wisata', [MenuController::class, 'wisata'])->name('wisata');
    Route::get('/add-wisata', [MenuController::class, 'add_wisata'])->name('add-wisata');
    Route::post('/simpan-wisata', [MenuController::class, 'simpan_wisata'])->name('simpan-wisata');
    Route::get('/edit-wisata/{id}', [MenuController::class, 'edit_wisata'])->name('edit-wisata');
    Route::post('/update-wisata/{id}', [MenuController::class, 'update_wisata'])->name('update-wisata');
    Route::get('/delete-wisata/{id}', [MenuController::class, 'destroy_wisata'])->name('delete-wisata');

    //footer
    Route::get('/footer', [MenuController::class, 'footer'])->name('footer');
    Route::get('/add-footer', [MenuController::class, 'add_footer'])->name('add-footer');
    Route::post('/simpan-footer', [MenuController::class, 'simpan_footer'])->name('simpan-footer');
    Route::get('/edit-footer/{id}', [MenuController::class, 'edit_footer'])->name('edit-footer');
    Route::post('/update-footer/{id}', [MenuController::class, 'update_footer'])->name('update-footer');
    Route::get('/delete-footer/{id}', [MenuController::class, 'destroy_footer'])->name('delete-footer');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
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
    $penginapan = DB::table('penginapan')->get();
    $spot_pantai = DB::table('spot_pantai')->get();
    $kuliner = DB::table('kuliner')->get();
    $kontak = DB::table('kontak')->get();
    $wisata = DB::table('wisata')->get();
    return view('home', [
        'penginapan' => $penginapan,
        'spot_pantai' => $spot_pantai,
        'kuliner' => $kuliner,
        'kontak' => $kontak,
        'wisata' => $wisata,
    ]);
});
