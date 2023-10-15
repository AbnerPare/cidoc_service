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
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\DemandeurController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Resumé_dedController;
use App\Http\Controllers\Resumé_dhcController;
use App\Http\Controllers\ProtectionController;


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

Route::get('/protection', [ProtectionController::class, 'protection'])->name('resumes.protection');      
Route::get('/protectioncreate', [ProtectionController::class, 'protectioncreate'])->name('resumes.protectioncreate'); 
Route::post('/protection', [ProtectionController::class, 'storeprotection'])->name('resumes.storeprotection'); 

Route::get('/dhc', [Resumé_dhcController::class, 'dhc'])->name('resumes.dhc');      
Route::get('/dhccreate', [Resumé_dhcController::class, 'dhccreate'])->name('resumes.dhccreate'); 
Route::post('/dhc', [Resumé_dhcController::class, 'storedhc'])->name('resumes.storedhc'); 

Route::get('/project', [Resumé_dedController::class, 'project'])->name('resumes.project');
Route::get('/ded', [Resumé_dedController::class, 'ded'])->name('resumes.ded');      
Route::get('/dedcreate', [Resumé_dedController::class, 'dedcreate'])->name('resumes.dedcreate'); 
Route::post('/ded', [Resumé_dedController::class, 'storeded'])->name('resumes.storeded'); 

Route::get('/form', [ProjectController::class, 'form'])->name('projects.form');
Route::post('/form', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/view1', [ProjectController::class, 'view1'])->name('projects.view1');



Route::get('/gestion', [ResumeController::class, 'gestion'])->name('resumes.gestion');      
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

Route::get('/absence', [AbsenceController::class, 'absence'])->name('absences.absence');      
Route::get('/cre_ab', [AbsenceController::class, 'cre_ab'])->name('absences.cre_ab'); 
Route::post('/absence', [AbsenceController::class, 'store'])->name('absences.store');

Route::get('/mission', [MissionController::class, 'mission'])->name('missions.mission');
Route::get('/ordre', [MissionController::class, 'ordre'])->name('missions.ordre');
Route::post('/store1', [MissionController::class, 'store1'])->name('missions.store1');
Route::post('/valider/{id}', [MissionController::class, 'valider'])->name('missions.valider');
Route::post('/rejeter/{id}', [MissionController::class, 'rejeter'])->name('missions.rejeter');
Route::get('/validation', [MissionController::class, 'validation'])->name('missions.validation');
Route::get('/mission/{id}/download', [MissionController::class, 'downloadRequest'])->name('missions.download');



Route::get('/conge', [CongeController::class, 'conge'])->name('conges.conge');
Route::get('/cre_conge', [CongeController::class, 'cre_conge'])->name('conges.cre_conge');
Route::post('/store', [CongeController::class, 'store'])->name('conges.store');

//Route::post('/valider/{id}', [CongeController::class, 'valider'])->name('missions.valider');
// Route::post('/rejeter/{id}', [CongeController::class, 'rejeter'])->name('missions.rejeter');
// Route::get('/validation', [CongeController::class, 'validation'])->name('missions.validation');



Route::get('/perso', [PersonnelController::class, 'perso'])->name('personnels.perso');
Route::get('/creer', [PersonnelController::class, 'creer'])->name('personnels.creer');
Route::post('/perso', [PersonnelController::class, 'tore'])->name('personnels.tore');
Route::get('/{personnel}', [PersonnelController::class, 'edit'])->name('personnels.edit');
Route::put('/{id}', [PersonnelController::class, 'update'])->name('personnels.update');

Route::get('/forum', [CidocController::class, 'forum']);
Route::get('/conge', [CidocController::class, 'conge']);
Route::get('/attestation', [CidocController::class, 'attestation']);
Route::get('/admin', [CidocController::class, 'admin']);


// demandeurs

Route::prefix('demandeur')->group(function () {
    Route::get('/login', [DemandeurController::class, 'showLoginForm'])->name('missions.login');
    Route::post('/login', [DemandeurController::class, 'login'])->name('missions.login.submit');
});
