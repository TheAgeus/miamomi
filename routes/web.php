<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

use App\Exports\OrdersExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;


Route::get('/', function () {
    return view('welcome');
})->name('guest.create.order');

Route::get('/login', [AuthController::class, 'login_view'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::Post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::post('/create-order', [OrderController::class, 'store'])->name('orders.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/orders-create', [OrderController::class, 'create'])->name('orders.create');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
    Route::get('/dashboard', [AppController::class, 'create'])->name('dashboard');
    Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');
    Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');

    Route::get('/orders/export', [OrderController::class, 'export'])->name('orders.export');

    // AJAX update status
    Route::post('/orders/{id}/update-status', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');

    Route::get('/orders/{order}/ticket', [OrderController::class, 'printTicket'])->name('orders.printTicket');
});    


// This route is for creating a new user PRIVATE
Route::post('/create-user', [RegisteredUserController::class, 'store']);