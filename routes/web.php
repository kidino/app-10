<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    echo "<h1>Hello</h1>";
});

Route::get('/hello/{nama}', function($nama){
    echo "<h1>Hello $nama</h1>";
});

Route::get('/hello/{nama}/{masa}', function($nama, $masa){

    if($masa == 'pagi') {
        echo "<h1>Good Morning $nama</h1>";
    } else if($masa == 'malam') {
        echo "<h1>Good Night $nama</h1>";
    } else {
        echo "<h1>Good Afternoon $nama</h1>";
    }
});

Route::get('/book', [ 
        BookController::class, 
        'index' 
    ])->name('book.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/user', [
        UserController::class, 
        'index'
    ])->name('user.index');

    Route::get('/user/{id}/edit', [
        UserController::class, 
        'edit'
    ])->name('user.edit');    

    Route::get('/user/create', [
        UserController::class,
        'create'
    ])->name('user.create');

    Route::post('/user', [
        UserController::class,
        'store'
    ])->name('user.store');

    Route::resource('role', RoleController::class);

    Route::put('/user/{id}',[
        UserController::class,
        'update'
    ])->name('user.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});


Route::get('/demo/home', function(){
    return view('demo.home');   
});

Route::get('/demo/about', function(){
    return view('demo.about');   
});

require __DIR__.'/auth.php';
