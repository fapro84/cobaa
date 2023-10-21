<?php

use App\Http\Controllers\EntryController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\siswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
});

Route::middleware('auth')->group(function () {
    Route::get('/siswa', [siswaController::class, 'index']);
    Route::get('/siswa/create', [siswaController::class, 'create']);
    Route::post('/siswa/add', [siswaController::class, 'add']);
    Route::get('/siswa/{id}/action', [siswaController::class, 'action']);
    Route::put('/siswa/{id}', [siswaController::class, 'update']);
    Route::delete('/siswa/{id}', [siswaController::class, 'destroy']);
});

Route::get('/guru', [guruController::class, 'index']);
Route::get('/entry', [EntryController::class, 'create']);
Route::post('/entries', [EntryController::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test-storage', function () {
    $content = "Test content.";
    Storage::disk('public')->put('test.txt', $content);
    return "File created.";
});