<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LabelController;
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

Route::get('/auth', function () {
    return view('auth.login');
});
Route::get('/', function () {
    return view('verify-label');
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
    // Route::get('certificates/{id}/label', [CertificateController::class, 'showLabel'])->name('certificates.showLabel');
    Route::get('certificates/{id}/certificate-card', [CertificateController::class, 'showCertficate'])->name('certificates.showCertficate');
    Route::get('delete/{id}/certificate-card', [CertificateController::class, 'destroy'])->name('certificates.destroy');
    Route::resource('certificates', CertificateController::class);
    Route::post('certificates/{id}/update', [CertificateController::class, 'update'])->name('certificates.update');

    // Labels
    Route::resource('labels', LabelController::class);
    Route::post('labels/{id}/update', [LabelController::class, 'update'])->name('labels.update');
    
    // Customers
    Route::resource('customers', CustomerController::class);
});


// Route public pour acceder au certificats sans etre connecté et via le QR Code
Route::get('labels/{id}/label', [LabelController::class, 'showLabel'])->name('labels.showLabel');
Route::get('certificate/CGL-C-000{id}', [CertificateController::class, 'showCertficate'])->name('certificatepublic.show');
