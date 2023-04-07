<?php

use App\Http\Controllers\controllerKsr;
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
    return view('home');
});
Route::get('/invoice',[controllerKsr::class, 'view'])->name('invoice');

Route::get('/pdf',[controllerKsr::class, 'pdf'])->name('pdf');
Route::get('/pdf2/{is_clicked}',[controllerKsr::class, 'pdf2'])->name('pdf2');
Route::get('/pdf2',[controllerKsr::class, 'pdf3'])->name('pdf3');


