<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;
use App\Http\Controllers\InformationController;


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


// VIEWS

Route::get('/', function () {
    return view('information.create-student');
});



// CRUD OPS TO DA DB

Route::get('/information/create', [InformationController::class, 'create'])->name('information.create');
// Route::get('/information/crapper', [InformationController::class, 'crapper'])->name('information.crapper');
Route::post('/information/store', [InformationController::class, 'store'])->name('information.store');
