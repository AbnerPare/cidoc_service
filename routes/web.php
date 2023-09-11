<?php

use App\Http\Controllers\AjoutController;
use App\Http\Controllers\SoumissionController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\CidocController;
use App\Http\Controllers\DirecteurController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\OmissionController;
use App\Http\Controllers\OcongeController;
use App\Http\Controllers\NewsletterController;

use App\Http\Controllers\Controller;

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

Route::get('/rapport', [RapportController::class, 'rapport'])->name('rapports.rapport');      
Route::get('/ajout', [RapportController::class, 'ajout'])->name('rapports.ajout'); 
Route::post('/rapport', [RapportController::class, 'stor'])->name('rapports.stor');      

Route::get('/contrat', [ContratController::class, 'contrat'])->name('contrats.contrat');      
Route::get('/crate', [ContratController::class, 'crate'])->name('contrats.crate'); 
Route::post('/contrat', [ContratController::class, 'store'])->name('contrats.store');

Route::get('/omission', [OmissionController::class, 'omission'])->name('omissions.omission');      
Route::get('/create', [OmissionController::class, 'create'])->name('omissions.create'); 
Route::post('/omission', [OmissionController::class, 'store'])->name('omissions.store');

Route::get('/oconge', [OcongeController::class, 'oconge'])->name('oconges.oconge');      
Route::get('/creat', [OcongeController::class, 'creat'])->name('oconges.creat'); 
Route::post('/oconge', [OcongeController::class, 'store'])->name('oconges.store');

Route::get('/mission', [MissionController::class, 'mission'])->name('missions.mission');      
Route::get('/ordre', [MissionController::class, 'ordre'])->name('missions.ordre');      
Route::post('/mission', [MissionController::class, 'store1'])->name('missions.store1');      
Route::get('/validation', [MissionController::class, 'validation'])->name('missions.validation');      
Route::get('/valider/{id}', [MissionController::class, 'valider'])->name('missions.valider');      
Route::get('/regeter/{id}', [MissionController::class, 'regeter'])->name('missions.regeter');      


Route::get('/perso', [PersonnelController::class, 'perso'])->name('personnels.perso');
Route::get('/creer', [PersonnelController::class, 'creer'])->name('personnels.creer');
Route::post('/perso', [PersonnelController::class, 'tore'])->name('personnels.tore');
Route::get('/{personnel}', [PersonnelController::class, 'edit'])->name('personnels.edit');
Route::put('/{id}', [PersonnelController::class, 'update'])->name('personnels.update');

Route::get('/forum', [CidocController::class, 'forum']);
Route::get('/conge', [CidocController::class, 'conge']);
Route::get('/attestation', [CidocController::class, 'attestation']);
Route::get('/admin', [CidocController::class, 'admin']);



