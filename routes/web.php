<?php

// use App\Http\Controllers\Frontend\PagesController as FrontendPagesController;
use App\Livewire\Category\EditCategory;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
// use App\Http\Controllers\Backend\PagesController as BackendPagesController;
use App\Livewire\Category\CreateCategory;
use App\Livewire\JobListing\CreateJobListing;
use App\Livewire\JobListing\EditJobListing;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoriesController as BackendCategoriesController;
use App\Http\Controllers\Backend\JobListingsController as BackendJobListingsController;
use App\Http\Controllers\Backend\DeleteCategoryController;
use App\Http\Controllers\Backend\DeleteJobListingController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CategoriesController as FrontendCategoriesController;
use App\Http\Controllers\Frontend\JobListingsController as FrontendJobListingsController;
use App\Http\Controllers\Frontend\SearchController;

Route::get('/', HomeController::class)->name("home");
Route::get('/jobs/category/{category}', FrontendCategoriesController::class)->name("category.jobs");
Route::get('/jobs/{job}', FrontendJobListingsController::class)->name("jobs");
Route::get("/search",SearchController::class)->name("search");

Route::group(["prefix"=> "admin", "as" => "admin."], function () {
    Route::get("dashboard", DashboardController::class)->name("dashboard");
    Route::get("categories", BackendCategoriesController::class)->name("categories.index");
    Route::get("job-listings",BackendJobListingsController::class)->name("job-listings.index");

    Route::get("categories/create", CreateCategory::class)->name("categories.create");
    Route::get("categories/edit/{category}", EditCategory::class)->name("categories.edit");
    Route::get("categories/delete/{category}", DeleteCategoryController::class)->name("categories.delete");

    Route::get("job-listings/create", CreateJobListing::class)->name("job-listings.create");
    Route::get("job-listings/edit/{job_listing}", EditJobListing::class)->name("job-listings.edit");
    Route::get("job-listings/delete/{job_listing}", DeleteJobListingController::class)->name("job-listings.delete");
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
