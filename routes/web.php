<?php

use App\Http\Controllers\ProfileController;
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
});

Route::get('/halamanutama', function () {
    return view('halamanutama');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/test-koneksi-database', function() {
	try {
		\DB::connection()->getPdo();

		echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();

	} catch (\Exception $e) {
		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
	}
});
Route::get('barang','App\Http\Controllers\barangController@index');


require __DIR__.'/auth.php';
