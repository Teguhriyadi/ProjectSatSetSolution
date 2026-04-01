<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AppController::class, "index"]);

Route::prefix("pages")->group(function() {
    Route::get("/dashboard", [AppController::class, "dashboard"]);

    Route::resource('kategori', KategoriController::class);
});
