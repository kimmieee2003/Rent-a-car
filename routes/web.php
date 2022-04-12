<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoiceLineController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/cars/getRentableCars', [CarController::class, 'getRentableCars'])->name('getRentableCars');

Route::get('/cars/rent/{id}', [CarController::class, 'rent'])->name('rent');

Route::post('/cars/makeInvoice', [CarController::class, 'makeInvoice'])->name('rentRequest');

Route::get('/print/{carId}/{InvoiceId}/{InvoiceLineId}', [CarController::class, 'getPdf'])->name('print');

Route::get('/print', [CarController::class, 'getPdfAll'])->name('printAll');

Route::get('/cars/rentedList', [CarController::class, 'getRented'])->name('rentedList');


Route::resources([
    'cars' => CarController::class,
    'users' => UserController::class,
    'invoices' => InvoiceController::class,
    'invoiceLines' => InvoiceLineController::class,
]);

require __DIR__.'/auth.php';
