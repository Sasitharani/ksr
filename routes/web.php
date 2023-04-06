<?php

use App\Http\Controllers\studentController;
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


Route::get('/',[studentController::class, 'view']);
Route::get('/view', [studentController::class, 'view']);
Route::post('/view',[studentController::class, 'insert'])->name('test');
Route::post('/test2',[studentController::class, 'view'])->name('test2');
Route::get('/update',[studentController::class, 'update'])->name('update');
Route::get('/edit/{id}',[StudentController::class, 'edit'])->name('edit');
//Route::put('/edit/{id}',[StudentController::class, 'view'])->name('edit');

Route::put('/edit/{id}',[studentController::class, 'change'])->name('edit');

Route::put('/students/{id}', [StudentController::class, 'change'])->name('student.update');

Route::put('/students/{id}', [StudentController::class, 'change'])->name('student.update');
Route::get('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('/update/deleted', [StudentController::class, 'view'])->name('students.index');
//Route::get('/test',[studentController::class, 'insert'])->name('test');

//Route::get('/test',[studentController::class, 'insert'])->name('test');

// Route::get('/', function () {});
// return view('welcome');
// Route::get('/demo', function () {echo "Hello World!!";});

// Route::post('/test', function () {
//     echo "Testing the route";
// });

// Route::put('users/{id}', function ($id) {
// });
// Route::patch();
// Route::delete('users/{id}', function ($id) {
// });

// Route::get('/name of the route',function(){return view('welcome');});
// Route::post('/',[studentController::class, ''])->name("");





