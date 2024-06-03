<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as Admin;
use App\Http\Controllers\Open as Open;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.layoutpublic');
})->name('home');

Route::get('', [\App\Http\controllers\open\TaskController::class, 'index'])->name('open.tasks.index');


Route::group(['middleware' => ['role:user|admin']], function(){
    Route::get('/admin/task/{task}/delete}', [Admin\TaskController::class, 'delete'])->name('tasks.delete');
    Route::resource('/admin/tasks', Admin\TaskController::class);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

});


Route::group(['middleware' => ['role:admin']], function(){
    Route::get('/admin/user/{user}/delete}', [Admin\UserController::class, 'delete'])->name('users.delete');
    Route::resource('/admin/users', Admin\UserController::class);

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
