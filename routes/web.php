<?php



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

use App\Http\Controllers\BengkelsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\elo\AdminsController;
use App\Http\Controllers\elo\AdminController;
use App\Http\Controllers\elo\KategoriController;
use App\Http\Controllers\elo\JasaController;
use App\Http\Controllers\elo\BengkelController;
use App\Http\Middleware\Admin;
use App\Models\Jasa;
use Illuminate\Support\Facades\Route;

Route::get('/', [BengkelsController::class, 'index']);
Route::get('detail/{id}', [BengkelsController::class, 'detail']);


Route::get('tes', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('user.about');
});


// Routes Jasa
Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\elo', 'middleware' => 'validasi'], function () {

    Route::get('/', [AdminController::class, 'admin'])->name('admin');

    Route::group(['prefix' => 'jasa'], function () {
        Route::get('/', [JasaController::class, 'index'])->name('index.jasa');
        Route::get('/cari', [JasaController::class, 'cari'])->name('cari.jasa');
        Route::get('/add', [JasaController::class, 'add'])->name('add.jasa');
        Route::post('/store', [JasaController::class, 'store'])->name('store.jasa');
        Route::get('/edit/{id}', [JasaController::class, 'edit'])->name('edit.jasa');
        Route::put('/update', [JasaController::class, 'update'])->name('update.jasa');
        Route::delete('/destroy/{id}', [JasaController::class, 'destroy'])->name('destroy.jasa');
    });
});

// Routes Bengkel
Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\elo', 'middleware' => 'validasi'], function () {

    Route::get('/', [AdminController::class, 'admin'])->name('admin');

    Route::group(['prefix' => 'bengkel'], function () {
        Route::get('/', [BengkelController::class, 'index'])->name('index.bengkel');
        Route::get('/cari', [BengkelController::class, 'cari'])->name('cari.bengkel');
        Route::get('/add', [BengkelController::class, 'add'])->name('add.bengkel');
        Route::post('/store', [BengkelController::class, 'store'])->name('store.bengkel');
        Route::get('/edit/{id}', [BengkelController::class, 'edit'])->name('edit.bengkel');
        Route::put('/update', [BengkelController::class, 'update'])->name('update.bengkel');
        Route::delete('/destroy/{id}', [BengkelController::class, 'destroy'])->name('destroy.bengkel');
    });
});

// Routes Admin
Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\elo', 'middleware' => 'validasi'], function () {

    Route::get('/', [AdminController::class, 'admin'])->name('admin');

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [AdminsController::class, 'index'])->name('index.admin');
        Route::get('/cari', [AdminsController::class, 'cari'])->name('cari.admin');
        Route::get('/add', [AdminsController::class, 'add'])->name('add.admin');
        Route::post('/store', [AdminsController::class, 'store'])->name('store.admin');
        Route::get('/edit/{id}', [AdminsController::class, 'edit'])->name('edit.admin');
        Route::put('/update', [AdminsController::class, 'update'])->name('update.admin');
        Route::delete('/destroy/{id}', [AdminsController::class, 'destroy'])->name('destroy.admin');
    });
});


Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\elo\Auth'], function () {

    Route::get('/login', 'LoginController@login')->name('login');
    Route::post('/login', 'LoginController@cek_login')->name('cek_login');
    Route::get('/register', 'LoginController@register')->name('register');
    Route::post('/register', 'LoginController@store')->name('store');
    Route::get('/reset_password', 'LoginController@reset_password')->name('reset_password');
    Route::put('/reset_password', 'LoginController@reset')->name('reset');
    Route::get('/logout', 'LoginController@logout')->name('logout');
});



Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
