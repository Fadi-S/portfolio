<?php

use App\Http\Controllers\{PlanController, ProjectController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('project', ProjectController::class)->only('index', 'create', 'store');

Route::resource('plan', PlanController::class)->only('index', 'create', 'store');
