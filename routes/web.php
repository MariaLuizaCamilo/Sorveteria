<?php

use App\Http\Controllers\SorvetesController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/sorvetes', [SorvetesController::class, 'index'])->name('sorvetes.index');

Route::get('sorvetes/create', [SorvetesController::class, 'create'])->name('sorvetes.create');

Route::post('sorvetes/store', [SorvetesController::class, 'store'])->name('sorvetes.store');

Route::get('/sorvetes/{sorvete}', [SorvetesController::class, 'show'])->name('sorvetes.show');

Route::get('/sorvetes/{sorvete}/editar', [SorvetesController::class, 'edit'])->name('sorvetes.edit');

Route::put('/sorvetes/{sorvete}', [SorvetesController::class, 'update'])->name('sorvetes.update');
