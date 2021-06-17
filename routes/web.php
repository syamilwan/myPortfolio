<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AcademicController;


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

//Home
Route::get('/', function () {
    return view('home');
});
Route::get('/downloadResume', function() {
    return response()->download('resume.pdf');
});

//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth']);
Route::post('/changeProfilePicture', [UserController::class, 'changeProfilePicture'])->middleware(['auth']);
Route::post('/changeResume', [UserController::class, 'changeResume'])->middleware(['auth']);
Route::get('/downloadUserResume', [UserController::class, 'downloadUserResume'])->middleware(['auth']);

//Academic
Route::prefix('academic')->group(function () {
    Route::get('/', [AcademicController::class, 'index'] )->middleware(['auth'])->name('academic.list');

    Route::prefix('detail')->group(function () {
        Route::get('/{academic_id}', [AcademicController::class, 'view'])->middleware(['auth'])->name('academic.view');
        Route::post('/add', [AcademicController::class, 'add'])->middleware(['auth']);
        Route::match(['put', 'patch'], '/{academic_id}', [AcademicController::class, 'edit'])->name('academic.edit');
        Route::delete('/{academic_id}', [AcademicController::class, 'delete'])->name('academic.delete');
    });
});

//Others
Route::get('/userList', [UserController::class, 'index']);

require __DIR__.'/auth.php';
