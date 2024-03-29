<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;
use App\Http\Controllers\InformationController;
use App\Models\Information;

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

Route::get(
    '/create-student',
    function () {
        return view('information.create-student');
    }
);

Route::get(
    '/',
    function () {
        return view('information.show-students');
    }
);

Route::get(
    '/update-students/{id}',
    [InformationController::class, 'showForm']
);

// CRUD OPS TO DA DB

Route::get('/information/create', [InformationController::class, 'create'])->name('information.create');
Route::post('/information/store', [InformationController::class, 'store'])->name('information.store');
Route::delete('/information/delete/{id}', [InformationController::class, 'deleteStudent']);
Route::put('/information/update/{id}', [InformationController::class, 'updateStudent']);
