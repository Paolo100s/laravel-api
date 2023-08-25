<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProjectController;

Route::prefix('z0')->group (function(){
    Route::get('/projects', [ProjectController::class, 'projectIndex']);

    Route::get('/projects/{id}', [ProjectController::class, 'projectShow']);
});
