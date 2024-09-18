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

    Route::post('/add', [Inputtest::class, 'add'])->name('add');
    Route::get('/view', [Inputtest::class, 'view'])->name('view');
    Route::get('/update/data/{id}', [Inputtest::class, 'update'])->name('update');
    Route::patch('/update/data', [Inputtest::class, 'update2'])->name('update2');
    Route::delete('/delete/data', [Inputtest::class, 'delete'])->name('delete');

    Route::get('/add_2', [Inputtest::class, 'add2'])->name('add2');
    Route::post('/add_2', [Inputtest::class, 'add3'])->name('add3');
    Route::get('/view_2', [Inputtest::class, 'view2'])->name('view2');
    Route::get('/update/data_2/{id}', [Inputtest::class, 'update3'])->name('update3');
    Route::patch('/update/data_2', [Inputtest::class, 'update4'])->name('update4');
    Route::delete('/delete/data_2', [Inputtest::class, 'delete2'])->name('delete2');
});
