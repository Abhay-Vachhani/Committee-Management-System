<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

Route::middleware('auth')->group(function () {
    Route::resource('/admin', MemberController::class);

    Route::get('/', function () {
        $x = Auth::user()->name;
        return "Hello $x, <a href='" . route('admin.index') . "'>Admin</a> <a href='" . route('logout') . "'>Logout</a>";
    })->name('home');
});

Route::get('/send', function () {
    $mail_data = [
        // 'recipient' => 'belimnisharkhanhasam@gmail.com',
        'recipient' => 'abhayvachhani28082002@gmail.com',
        'fromEmail' => 'atmiya.committee@pypro.tech',
        'fromName' => 'Abc',
        'subject' => 'Test -> Hello',
        'body' => 'How are you?'
    ];

    Mail::send('s', $mail_data, function ($message) use ($mail_data) {
        $message->to($mail_data['recipient'])
            ->from($mail_data['fromEmail'], $mail_data['fromName'])
            ->subject($mail_data['subject']);
    });
    return "Sent";
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
