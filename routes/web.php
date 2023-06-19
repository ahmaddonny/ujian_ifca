<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiddlewareController;
use App\Http\Controllers\MigrateController as Migrate;
use App\Http\Controllers\StorageController as Storage;
use App\Http\Controllers\PHP\Laravel\ComposerController;

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
    return view('dash');
});

Route::get('/soal11', function () {
    return ('Selamat Anda berhasil!');
});
Route::get('/soal2', [MiddlewareeCController::class, 'models']);
Route::get('/soal3', [Migrate::class, 'seeder']);
Route::get('/soal4', [Storage::class, 'config']);
Route::get('/soal5', [ComposerController::class, 'require']);

Route::get('/frontend', function () {
    return view('frontend');
});

Route::get('/backend', function () {
    return view('backend');
});

