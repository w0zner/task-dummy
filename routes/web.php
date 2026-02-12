<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\SettingsController;



Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/tasks/complete-all/{anho}', [TaskController::class, 'completeAll'])->name('tareas.completeAll');

Route::resource('tasks', TaskController::class)
->only(['index', 'show']);

Route::get('/tasks/dashboard/show', [TaskController::class, 'dashboard'])->name('tareas.dashboard');

Route::prefix('tasks')->name('tareas.')->controller(TaskController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{tarea}', 'show')->name('show');
    Route::get('/{tarea}/edit', 'edit')->name('edit');
    Route::put('/{tarea}', 'update')->name('update');
    Route::delete('/{tarea}', 'destroy')->name('destroy');
});

/* Route::prefix('settings')->name('settings.')->controller(SettingsController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('store');
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/account', 'account')->name('account');
}); */

Route::get('/sumar/{a}/{b}', CalculadoraController::class);

Route::get('/prueba', function() {
   $categories = DB::table('categories')->pluck('name', 'id'); //DB::table('categories')->find(1);
   //->where('id', '>', 2);
   return $categories;
});

/* Route::resource('tasks', TaskController::class)
    ->names('tareas')
    ->parameters(['tasks' => 'tarea']); */
