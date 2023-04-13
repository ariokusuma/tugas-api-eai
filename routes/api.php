<?php

use App\Http\Controllers\TiketController;
use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::apiResource('tiketing', TiketController::class);

/*
|--------------------------------------------------------------------------
========================== Ticket Details =========================
|--------------------------------------------------------------------------
*/

// 1. show all
Route::GET('tiketing/', [TiketController::class, 'index'])->name('index');

// 2. add
Route::POST('tiketing/add/', [TiketController::class, 'store'])->name('add');

// 3. show by id
Route::GET('tiketing/{id}', [TiketController::class, 'show'])->name('showid');

// 4. update
Route::PUT('tiketing/update/{id}', [TiketController::class, 'update'])->name('update');


/*
|--------------------------------------------------------------------------
========================== Event Details =========================
|--------------------------------------------------------------------------
*/

// 5. show all events
Route::GET('events/', [EventController::class, 'index'])->name('index2');

// 6. show by id
Route::GET('event/show/{id}', [EventController::class, 'show'])->name('showevent');

// 2. add event detail
Route::POST('event/add/', [EventController::class, 'store'])->name('add');


