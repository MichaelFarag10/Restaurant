<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CatagoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\FrontEnd\CategoryController;
use App\Http\Controllers\FrontEnd\MenusController;
use App\Http\Controllers\FrontEnd\ReservationsController;
use App\Http\Controllers\FrontEnd\WelcomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[WelcomeController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/{category}',[CategoryController::class,'show'])->name('categories.show');
Route::get('/menus',[MenusController::class,'index'])->name('menus.index');
Route::get('/reservations/step-one',[ReservationsController::class,'stepOne'])->name('reservations.step.one');
Route::post('/reservations/step-one',[ReservationsController::class,'storeStepOne'])->name('reservations.store.step.one');
Route::get('/reservations/step-two',[ReservationsController::class,'stepTwo'])->name('reservations.step.two');
Route::post('/reservations/step-two',[ReservationsController::class,'storeStepTwo'])->name('reservations.store.step.two');
Route::get('/thankyou',[WelcomeController::class,'thankyou'])->name('thankyou');

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function(){
 Route::get('/',[AdminController::class,'index'])->name('index');
 Route::resource('/categories', CatagoryController::class);
 Route::resource('/menus', MenuController::class);
 Route::resource('/tables', TableController::class);
 Route::resource('/reservations', ReservationController::class);
});
require __DIR__.'/auth.php';
