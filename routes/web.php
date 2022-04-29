<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\MoviesController;
use Illuminate\Routing\RouteGroup;

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

// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home"
//     ]);
// });

Route::get('/admin', function () { //sidebar
    return view('layouts.sidebar');
});



Route::get('/film', function () {
    return view('film', [
        "title" => "Film"
    ]);
});

Route::get('/ticket', function () {
    return view('ticket.index', [
        "title" => "Ticket"
    ]);
});

Route::get('/transaction', function () {
    return view('transaction.index', [
        "title" => "Transaction"
    ]);
});
Route::get('/jadwal', function () {
    return view('jadwal', [
        "title" => "Jadwal"
    ]);
});
Route::get('/login', function () {
    return view('user.login', [
        "title" => "Login"
    ]);
})->name('login');
Route::get('/signup', function () {
    return view('user.signup', [
        "title" => "Signup"
    ]);
});

Route::group(['middleware' => ['auth', 'ceklevel:Admin']], function () {

    Route::get('/dashboard', function () {
        return view('dashboard', [
            "title" => "Dashboard"
        ]);
    });
});

Route::group(['middleware' => ['auth', 'ceklevel:Customer']], function () {

    Route::get('/', function () {
        return view('movies.index', [
            "title" => "Movies"
        ]);
    });
});

// User
Route::get('/user', [UserController::class, 'index']);

Route::get('/user/create', [UserController::class, 'create']);
Route::post('/postLogin', [UserController::class, 'postLogin']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/regis', [UserController::class, 'regis']);
Route::post('/regis', [UserController::class, 'postRegis']);
Route::post('/user/create', [UserController::class, 'store']);

Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/user/edit/{id}', [UserController::class, 'update']);

Route::get('/user/delete/{id}', [UserController::class, 'destroy']);

// Film
Route::get('/film', [FilmController::class, 'index']);

Route::get('/film/create', [FilmController::class, 'create']);
Route::post('/film/create', [FilmController::class, 'store']);

Route::get('/film/edit/{id}', [FilmController::class, 'edit']);
Route::post('/film/edit/{id}', [FilmController::class, 'update']);

Route::get('/film/delete/{id}', [FilmController::class, 'destroy']);

Route::get('/films', [FilmController::class, 'show']);

// movie
Route::get('/', [MoviesController::class, 'index'])->name('movie.index');
Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('movies.show');

Route::post('/post/store', [MoviesController::class, 'store']);