<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\ReportsController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Member;
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

    // return view('user.user_2');
    // return redirect()->route('user.footer');
    return redirect()->route('dashboard');
});


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
// admin screen - 3
Route::get('/admin/add-member', function () {
    return view('admin.admin_3');
});
// 

//

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Admin routes
Route::middleware(['auth', Admin::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::post('/create/committee', [CommitteeController::class, 'store'])->name('committee.create');

    Route::prefix('reports')->group(function () {
        Route::get('/attendance_report.pdf', [ReportsController::class, 'attendanceReport'])->name('admin.attendanceReport');
        Route::get('/committee_constitution_report.pdf', [ReportsController::class, 'committeeConstitutionReport'])->name('admin.committeeConstitutionReport');
    });
});

// User routes
Route::middleware(['auth', Member::class])->group(function () {
    Route::get('/dashboard', function () {
        return 'Welcome, ' . Auth::user()->email;
    })->name('dashboard');
});

Route::get('/user/linking', function () {
    return view('user.01_linking_user');
});
//
Route::get('/user/add-meeting', function () {
    return view('user.index_user');
});
//

Route::get('/user/user-two', function () {
    return view('user.userScreen_2');
});
//

Route::get('/user/select', function () {
    return view('user.userScreen_3');
});
//

Route::get('/user/user-four', function () {
    return view('user.userScreen_4');
});
//
