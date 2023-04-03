<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommitteeController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Member;
use App\Models\Member as ModelsMember;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    if (!Auth::check())
        return redirect('/login');

    if (Auth::user()->is_admin)
        return redirect()->route('admin.dashboard');

    return redirect()->route('dashboard');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Admin routes
Route::middleware(['auth', Admin::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        // return 'Welcome, ' . Auth::user()->email . ' to admin panel';
        $members = ModelsMember::all();
        return view('admin.create_committee', compact('members'));
    })->name('admin.dashboard');

    Route::get('/create/committee', [CommitteeController::class, 'store'])->name('committee.create');
});

// User routes
Route::middleware(['auth', Member::class])->group(function () {
    Route::get('/dashboard', function () {
        return 'Welcome, ' . Auth::user()->email;
    })->name('dashboard');
});
