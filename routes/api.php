<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CurrentResumeController;

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::post('/contact', [ContactController::class, "store"])
    ->name('contact.store');

Route::get("/resume", CurrentResumeController::class);

Route::get("/projects", [ProjectController::class, "index"])
    ->name("project.index");

Route::get("/projects/{project}", [ProjectController::class, "show"])
    ->name("project.show");
