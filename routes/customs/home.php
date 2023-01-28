<?php

use App\Http\Controllers\HomeController;

Route::resource('/', HomeController::class)->only(['index']);
