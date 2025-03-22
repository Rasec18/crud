<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AlumnoController;

//

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function() {
    return view('landing');
});

Route::resource('alumnos', AlumnoController::class);