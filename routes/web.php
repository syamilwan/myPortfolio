<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

//Misc
Route::get('/downloadResume', function() {
    return response()->download('resume.pdf');
});

//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth']);

//Others
Route::get('/userList', [UserController::class, 'index']);
Route::post('/uploadProfilePicture', [UserController::class, 'uploadProfilePicture'])->middleware(['auth']);

require __DIR__.'/auth.php';
