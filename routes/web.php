<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\kriteriaController;
use App\Http\Controllers\SubKriteriaController;
use App\Http\Controllers\topsisController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\CalculateController;
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
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/google/redirect', [AuthController::class, 'redirect'])->name('google.redirect');
// Route::get('/google/callback', [AuthController::class, 'callback'])->name('google.callback');
// Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');


Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::post('login/google', 'loginByGoogle')->name('login.google');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');

});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
      
    
    Route::controller(KriteriaController::class)->prefix('kriteria')->group(function () {
        Route::get('', 'index')->name('kriteria');
        Route::get('create', 'create')->name('kriteria.create');
        Route::post('store', 'store')->name('kriteria.store');
        Route::get('show/{id}', 'show')->name('kriteria.show');
        Route::get('edit/{id}', 'edit')->name('kriteria.edit');
        Route::put('edit/{id}', 'update')->name('kriteria.update');
        Route::delete('destroy/{id}', 'destroy')->name('kriteria.destroy');
    });

    Route::controller(AlternatifController::class)->prefix('alternatif')->group(function () {
        Route::get('', 'index')->name('alternatif');
        Route::get('create', 'create')->name('alternatif.create');
        Route::post('store', 'store')->name('alternatif.store');
        Route::get('edit/{id}', 'edit')->name('alternatif.edit');
        Route::put('edit/{id}', 'update')->name('alternatif.update');
    });

    Route::controller(SubKriteriaController::class)->prefix('subkriterias')->group(function () {
        Route::get('', 'index')->name('subkriteria');
        // Route::get('create', 'create')->name('subkriteria.create');
        // Route::post('store', 'store')->name('subkriteria.store');
        // Route::get('edit/{id}', 'edit')->name('subkriteria.edit');
        // Route::put('edit/{id}', 'update')->name('subkriteria.update');
    });
    
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
    
Route::controller(TopsisController::class)->group(function () {
    Route::get('index', 'topsis')->name('calculate.index');
});

Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian.index');
Route::get('/penilaian/create', [PenilaianController::class, 'create'])->name('penilaian.create');
Route::post('/penilaian', [PenilaianController::class, 'store'])->name('penilaian.store');
Route::get('/penilaian/{id}/edit', [PenilaianController::class, 'getForms'])->name('penilaian.edit');
Route::put('/penilaian/update', [PenilaianController::class, 'update'])->name('penilaian.update');
Route::delete('/penilaian/{id}', [PenilaianController::class, 'destroy'])->name('penilaian.destroy');
Route::get('/penilaian/calculate', [PenilaianController::class, 'calculate'])->name('penilaian.calculate');

Route::get('/perhitungan/topsis', [CalculateController::class, 'topsis'])->name('calculate.topsis');


       
