<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Inputtest;

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

Route::middleware(['www'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::post('/store-in-first-table', [Inputtest::class, 'add'])->name('add');
    Route::get('/show-first-table-data', [Inputtest::class, 'view'])->name('view');
    Route::get('/edit-from-first-table/{id}', [Inputtest::class, 'update'])->name('update');
    Route::patch('/update-from-first-table', [Inputtest::class, 'update2'])->name('update2');
    Route::delete('/destroy-from-first-table', [Inputtest::class, 'delete']);

    Route::get('/store-data-in-second-table', [Inputtest::class, 'add2'])->name('add2');
    Route::post('/store-in-second-table', [Inputtest::class, 'add3'])->name('add3');
    Route::get('/show-second-table-data', [Inputtest::class, 'view2'])->name('view2');
    Route::get('/edit-from-second-table/{id}', [Inputtest::class, 'update3'])->name('update3');
    Route::patch('/update-from-second-table', [Inputtest::class, 'update4'])->name('update4');
    Route::delete('/destroy-from-second-table', [Inputtest::class, 'delete2']);
});
