<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;


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

// Rute utama
Route::get('/', [homeController::class, 'home'] );

// Rute view home
Route::get('/Home', function () {
    return view('home', [homeController::class, 'home']);
});

// Rute view portofolio
Route::get('/Portofolio', [homeController::class, 'portofolio']);

// Rute view admin
Route::get('/Admin', [homeController::class, 'admin']);

Route::get('/FormAdmin', [homeController::class, 'formAdmin'])->name('FormAdmin');

// Rute Insert Data Home
Route::post('/Data-home', [homeController::class, 'create']);

// Rute Insert Data Service
Route::post('/Data-service', [homeController::class, 'createService']);

// Rute Insert Data Project
Route::post('/Data-project', [homeController::class, 'createProject']);

// Rute Insert Data Portofolio
Route::post('/Data-portofolio', [homeController::class, 'createPortofolio']);

// Detail Project
Route::get('/projects/{id}', [homeController::class, 'project']);

// Rute view CuriculumVitae
Route::get('/CuriculumVitae', function () {
    return view('curiculumVitae');
});