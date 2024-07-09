<?php

use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\metadataController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;


Route::get('/', [InicioController::class, 'index'])->name('inicio');

// Bloquear la ruta Register

Route::get('/register', function () {
    return redirect('/');
});

// Route::get('/admin',[InicioController::class,'panel'])->name('panel');

// Todos los que tengan el prefijo admin

Route::prefix('admin')->group(function () {
    Route::get('/metadata', [metadataController::class, 'index'])->name('metadata');
    Route::put('/metadata/update', [metadataController::class, 'update'])->name('metadata.update');
    Route::get('/hero', [metadataController::class, 'hero'])->name('admin.hero');
    Route::put('/hero/update/slider1', [metadataController::class, 'slider1'])->name('slider1.update');
    Route::put('/hero/update/slider2', [metadataController::class, 'slider2'])->name('slider2.update');
    Route::put('/hero/update/slider3', [metadataController::class, 'slider3'])->name('slider3.update');

    Route::get('/about', [metadataController::class, 'about'])->name('admin.about');
    Route::put('/about/update', [metadataController::class, 'updateAbout'])->name('about.update');
    
    Route::get('/services', [Servicioscontroller::class, 'index'])->name('admin.services');
    Route::get('/services/create', [Servicioscontroller::class, 'create'])->name('admin.services.create');
    Route::post('/services/store', [Servicioscontroller::class, 'store'])->name('admin.services.store');
    Route::delete('/services/destroy/{id}', [Servicioscontroller::class, 'destroy'])->name('admin.services.destroy');
    Route::get('/services/edit/{id}', [Servicioscontroller::class, 'edit'])->name('admin.services.edit');
    Route::put('/services/update/{id}', [Servicioscontroller::class, 'update'])->name('admin.services.update');
    
    Route::get('/projects', [GaleriaController::class, 'index'])->name('admin.projects');
    Route::get('/projects/create', [GaleriaController::class, 'create'])->name('admin.projects.create');
    Route::post('/projects/store', [GaleriaController::class, 'store'])->name('admin.projects.store');
    Route::delete('/projects/destroy/{id}', [GaleriaController::class, 'destroy'])->name('admin.projects.destroy');
    Route::get('/projects/edit/{id}', [GaleriaController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/projects/update/{id}', [GaleriaController::class, 'update'])->name('admin.projects.update');
    
    Route::get('/teams', [TeamController::class, 'index'])->name('admin.teams');
    Route::get('/teams/create', [TeamController::class, 'create'])->name('admin.teams.create');
    Route::post('/teams/store', [TeamController::class, 'store'])->name('admin.teams.store');
    Route::delete('/teams/destroy/{id}', [TeamController::class, 'destroy'])->name('admin.teams.destroy');
    Route::get('/teams/edit/{id}', [TeamController::class, 'edit'])->name('admin.teams.edit');
    Route::put('/teams/update/{id}', [TeamController::class, 'update'])->name('admin.teams.update');

    Route::get('/faq', [metadataController::class, 'faq'])->name('admin.faq');
    Route::get('/testimonials', [metadataController::class, 'testimonials'])->name('admin.testimonials');
    Route::get('/contact', [metadataController::class, 'contact'])->name('admin.contact');
    Route::get('/footer', [metadataController::class, 'footer'])->name('admin.footer');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('dashboard');
});
