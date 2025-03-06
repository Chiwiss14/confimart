<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', [HomeController::class, 'welcomePage'])->name('welcome');


Route::get('/view-property', [HomeController::class, 'propertyPage'])->name('property.view');
Route::get('/property-list', [HomeController::class, 'propertyList'])->name('property.list');
Route::post('/add-reviews', [HomeController::class, 'store'])->name('review.store');
Route::get('/property-details/{id}', [HomeController::class, 'detailsPage'])->name('property.single');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::post('/store-property', [AdminPropertyController::class, 'store'])->name('admin.property.store');
    Route::get('/add-property', [AdminPropertyController::class, 'addProperty'])->name('admin.property.add');
    Route::get('/see-reviews', [AdminPropertyController::class, 'reviews'])->name('admin.property.review');
    Route::get('/single-property/{id}', [AdminPropertyController::class, 'viewProperty'])->name('admin.single.property');
    Route::get('/edit-property/{id}', [AdminPropertyController::class, 'editProperty'])->name('admin.edit.property');
    Route::post('/update-property/{id}', [AdminPropertyController::class, 'updateProperty'])->name('admin.update.property');
    Route::post('/delete-property/{id}', [AdminPropertyController::class, 'deleteProperty'])->name('admin.delete.property');


});

require __DIR__.'/auth.php';
