<?php

use App\Http\Controllers\AjoutController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\CidocController;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });


 Route::get('/', [ResumeController::class, 'index'])->name('resumes.index');      
 Route::get('/ajouter', [ResumeController::class, 'ajouter'])->name('resumes.ajouter');      
 Route::post('/', [ResumeController::class, 'store'])->name('resumes.store');      


//  Route::get('/', [AjoutController::class, 'index'])->name('resumes.index');      
//  Route::get('/ajout', [AjoutController::class, 'ajout'])->name('resumes.ajout');      
//  Route::post('/', [AjoutController::class, 'stor'])->name('resumes.stor');      



Route::get('/rapport', [RapportController::class, 'rapport'])->name('rapports.rapport');      
Route::get('/ajout', [RapportController::class, 'ajout'])->name('rapports.ajout'); 
Route::post('/rapport', [RapportController::class, 'stor'])->name('rapports.stor');      








Route::get('/perso', [PersonnelController::class, 'perso'])->name('personnels.perso');
Route::get('/creer', [PersonnelController::class, 'creer'])->name('personnels.creer');
Route::post('/perso', [PersonnelController::class, 'tore'])->name('personnels.tore');
Route::get('/{personnel}', [PersonnelController::class, 'edit'])->name('personnels.edit');
Route::put('/{id}', [PersonnelController::class, 'update'])->name('personnels.update');







Route::get('/forum', [CidocController::class, 'forum']);

Route::get('/mission', [CidocController::class, 'mission']);

Route::get('/conge', [CidocController::class, 'conge']);

Route::get('/attestation', [CidocController::class, 'attestation']);

Route::get('/admin', [CidocController::class, 'admin']);





