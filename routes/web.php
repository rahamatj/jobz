<?php

use App\Http\Controllers\Frontend\PagesController as FrontendPagesController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\Backend\PagesController as BackendPagesController;
use App\Livewire\Category\CreateCategory;

Route::get('/', [FrontendPagesController::class, "index"])->name("home");

Route::get('/jobs/category/{category}', [FrontendPagesController::class, "category"])->name("category.jobs");
Route::get('/jobs/{job}', [FrontendPagesController::class, "job"])->name("jobs");
Route::get("/search", [FrontendPagesController::class, "search"])->name("search");

Route::group(["prefix"=> "admin", "as" => "admin."], function () {
    Route::get("dashboard", [BackendPagesController::class, "index"])->name("dashboard");
    Route::get("categories", [BackendPagesController::class, "categories"])->name("categories.index");

    Route::get("categories/create", CreateCategory::class)->name("categories.create");
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
