<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('project', 'ProjectController')->only('index', 'create', 'store');

Route::resource('plan', 'PlanController')->only('index', 'create', 'store');
