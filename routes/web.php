<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Accounts\RoleController;
use App\Http\Controllers\CultureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TypeEventController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::group(['prefix' => 'admin'] , function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/accounts/roles', [RoleController::class, 'index'])->name('accounts.role.index');
    Route::post('/accounts/roles', [RoleController::class, 'store'])->name('accounts.role.store');
    Route::delete('/accounts/roles/{id}/delete', [RoleController::class, 'destroy'])->name('accounts.role.delete');
    Route::get('/culture', [CultureController::class, 'index'])->name('culture.index');
    Route::post('/culture', [CultureController::class, 'store'])->name('culture.store');
    Route::get('/culture/{id}', [CultureController::class, 'destroy'])->name('culture.destroy');

    Route::get('/champ', [CultureController::class, 'champ_index'])->name('champ.index');
    Route::post('/champ', [CultureController::class, 'champ_store'])->name('champ.store');
    Route::get('/champ/{id}', [CultureController::class, 'destroy'])->name('champ.destroy');
    Route::get('/champ/{id}/show', [CultureController::class, 'champ_show'])->name('champ.show');
    Route::delete('/culture/{id}', [CultureController::class, 'destroy'])->name('culture.destroy');

    
    Route::get('/event', [EventController::class, 'index'])->name('Event.index');
    Route::get('/event/create', [EventController::class, 'create'])->name('Event.create');
    Route::get('/events/store', [EventController::class, 'store'])->name('events.store');
    Route::get('/type_event', [TypeEventController::class, 'index'])->name('type_event.index');
    Route::post('/type_event/store', [TypeEventController::class, 'store'])->name('type_event.store');
    //
    Route::post('/event_store/store', [CultureController::class, 'event_store'])->name('event_store');

    //Route::post('/event', [EventController::class, 'champ_store'])->name('champ.store');
    // Route::get('/event/{id}', [EventController::class, 'destroy'])->name('champ.destroy');
    //Route::get('/event/{id}/show', [EventController::class, 'champ_show'])->name('champ.show');


});








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
