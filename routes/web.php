<?php

use App\Models\PageView;
use App\Http\Controllers\{PlanController, ProjectController};
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'))
    ->middleware('save');

Route::get('/portfolio', fn() => view('portfolio'))
    ->middleware('save');

Route::get('redirect', function () {
    PageView::saveView(request('to'));

    return redirect(request('to'));
});

Route::prefix(Config::get('app.admin_url'))
    ->middleware('auth')->group(function () {

        Route::get('/', fn() => view('admin.dashboard'));

        Route::get('/profile', fn() => view('admin.profile'));

        Route::resource('project', ProjectController::class)->only('index', 'create', 'store');

        Route::resource('plan', PlanController::class)->only('index', 'create', 'store');
});

