<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\ProjetController;

Route::get('/', function () {
    return view('welcome');
});


//
Route::get('employe/accueil', function() {
    return View::make('employe.accueil');
    });
    Route::controller(EmployeController::class)->group(function () {
    Route::get('/employe', 'index');
    Route::get('/employe/create', 'create');
    Route::get('/employe/{id}', 'show');
    Route::get('/employe/{id}/edit', 'edit');
    Route::post('/employe', 'store');
    Route::patch('/employe/{id}', 'update');
    Route::delete('/employe/{id}', 'destroy');
    });
    Route::controller(TacheController::class)->group(function () {
    Route::get('/tache', 'index');
    Route::get('/tache/create', 'create');
    Route::get('/tache/{id}', 'show');
    Route::get('/tache/{id}/edit', 'edit');
    Route::post('/tache', 'store');
    Route::patch('/tache/{id}', 'update');
    Route::delete('/tache/{id}', 'destroy');
    });



    ///conge
    // Route pour la page d'accueil (liste des congés)
Route::resource('conges', CongeController::class);


Route::resource('projets', ProjetController::class);
