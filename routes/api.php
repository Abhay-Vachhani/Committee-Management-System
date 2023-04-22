<?php

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

// Admin routes
// Route::middleware(['auth', Admin::class])->prefix('admin')->group(function () {
    // Route::post('/create/committee', [CommitteeController::class, 'store'])->name('committee.create');
    Route::middleware('Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse')->post('/admin/create/committee', function(Request $request){
        return $request;

    })->name('committee.create');
// });