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
Route::GET('tiketing/', [TiketController::class, 'index'])->name('showtickets');

// 2. show by id
Route::GET('tiketing/{id}', [TiketController::class, 'show'])->name('showticket');

// 3. add
Route::POST('tiketing/add/', [TiketController::class, 'store'])->name('addtickets');

// 4. update
Route::PUT('tiketing/update/{id}', [TiketController::class, 'update'])->name('updateticket');


/*
|--------------------------------------------------------------------------
========================== Event Details =========================
|--------------------------------------------------------------------------
*/

// 5. show all events
Route::GET('events/', [EventController::class, 'index'])->name('showevents');

// 6. show by id
Route::GET('event/show/{id}', [EventController::class, 'show'])->name('showevent');

// 7. add event detail
Route::POST('event/add/', [EventController::class, 'store'])->name('addevent');


