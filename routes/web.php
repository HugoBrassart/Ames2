<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AmeController;
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
    return view('welcome');
});

Route::resource('ames',AmeController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/test-livewire', function () {
        return view('counter-container');
    });

    Route::get('/creation-ames', function () {
        return view('creation-ames');
    })->name('creation-ames');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/modification-ames',[AmeController::class, "index"])->name('modification-ames');

    Route::get('/admin', function(){
        return view('admin.admin-panel');
    })->name('administration')->middleware('is_admin');

});

