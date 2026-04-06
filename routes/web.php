<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TagController as ControllersTagController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AppController::class, "index"]);

Route::get("/blog/{slug}", [AppController::class, "show"]);

Route::prefix("pages")->group(function() {
    Route::get("/dashboard", [AppController::class, "dashboard"]);

    Route::resource('kategori', KategoriController::class);
    Route::resource("tag", ControllersTagController::class);
    Route::resource("blog", BlogController::class);
});
