<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CustomerController;
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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    // Certificates
    Route::get('certificates/{id}/label', [CertificateController::class, 'showLabel'])->name('certificates.showLabel');
    Route::get('certificates/{id}/certificate-card', [CertificateController::class, 'showCertficate'])->name('certificates.showCertficate');
    Route::resource('certificates', CertificateController::class);
    
    // Customers
    Route::resource('customers', CustomerController::class);
});
