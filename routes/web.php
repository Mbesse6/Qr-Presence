<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\gestionnaireControleur;
use App\Http\Controllers\QrCodeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;

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

// Route::get('/', function () {
//     return view('accueil');
// });

Route::get('/', [AccueilController::class, 'generate']);

Route::get('/qrcode', [QrCodeController::class, 'generate'])->name('qr.generate');

Route::get('/scanner',[QrCodeController::class, 'scanner'])->name('qr.scanner');

Route::get('/employe',[EmployeController::class, 'liste_employes']);
Route::get('/ajouter', [EmployeController::class, 'ajouter_employe']);
Route::post('/ajouter/traitement', [EmployeController::class, 'ajouter_employe_traitement']);
Route::get('/modifier_employe/{id}',[EmployeController::class, 'modifier_employe']);
Route::post('/modifier/traitement', [EmployeController::class, 'modifier_employe_traitement']);
