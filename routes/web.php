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
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\DemandeurController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Resumé_dedController;
use App\Http\Controllers\Resumé_dhcController;
use App\Http\Controllers\Resumé_protectionController;
use App\Http\Controllers\Resumé_administrativeController;
use App\Http\Controllers\Resumé_logistiqueController;
use App\Http\Controllers\Fiches_de_congéController;
use App\Http\Controllers\Fiches_de_missionController;
use App\Http\Controllers\Fiches_de_contratController;
use App\Http\Controllers\Fiches_dedController;
use App\Http\Controllers\Fiches_dhcController;
use App\Http\Controllers\Fiches_protectionController;
use App\Http\Controllers\Fiches_administrativeController;
use App\Http\Controllers\Fiches_logistiqueController;












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
Route::get('/fiches_logistique', [Fiches_logistiqueController::class, 'fiches_logistique'])->name('documentation.fiches_logistique');      
Route::get('/fiches_logistiquecreate', [Fiches_logistiqueController::class, 'fiches_logistiquecreate'])->name('documentation.fiches_logistiquecreate'); 
Route::post('/fiches_logistique', [Fiches_logistiqueController::class, 'storefiches_logistique'])->name('documentation.storefiches_logistique');

Route::get('/fiches_administrative', [Fiches_administrativeController::class, 'fiches_administrative'])->name('documentation.fiches_administrative');      
Route::get('/fiches_administrativecreate', [Fiches_administrativeController::class, 'fiches_administrativecreate'])->name('documentation.fiches_administrativecreate'); 
Route::post('/fiches_administrative', [Fiches_administrativeController::class, 'storefiches_administrative'])->name('documentation.storefiches_administrative');

Route::get('/fiches_protection', [Fiches_protectionController::class, 'fiches_protection'])->name('documentation.fiches_protection');      
Route::get('/fiches_protectioncreate', [Fiches_protectionController::class, 'fiches_protectioncreate'])->name('documentation.fiches_protectioncreate'); 
Route::post('/fiches_protection', [Fiches_protectionController::class, 'storefiches_protection'])->name('documentation.storefiches_protection');

Route::get('/fiches_dhc', [Fiches_dhcController::class, 'fiches_dhc'])->name('documentation.fiches_dhc');      
Route::get('/fiches_dhccreate', [Fiches_dhcController::class, 'fiches_dhccreate'])->name('documentation.fiches_dhccreate'); 
Route::post('/fiches_dhc', [Fiches_dhcController::class, 'storefiches_dhc'])->name('documentation.storefiches_dhc');

Route::get('/fiches_ded', [Fiches_dedController::class, 'fiches_ded'])->name('documentation.fiches_ded');      
Route::get('/fiches_dedcreate', [Fiches_dedController::class, 'fiches_dedcreate'])->name('documentation.fiches_dedcreate'); 
Route::post('/fiches_ded', [Fiches_dedController::class, 'storefiches_ded'])->name('documentation.storefiches_ded');

Route::get('/fiches_de_contrat', [Fiches_de_contratController::class, 'fiches_de_contrat'])->name('documentation.fiches_de_contrat');      
Route::get('/fiches_de_contratcreate', [Fiches_de_contratController::class, 'fiches_de_contratcreate'])->name('documentation.fiches_de_contratcreate'); 
Route::post('/fiches_de_contrat', [Fiches_de_contratController::class, 'storefiches_de_contrat'])->name('documentaion.storefiches_de_contrat');


Route::get('/fiches_de_mission', [Fiches_de_missionController::class, 'fiches_de_mission'])->name('documentation.fiches_de_mission');      
Route::get('/fiches_de_missioncreate', [Fiches_de_missionController::class, 'fiches_de_missioncreate'])->name('documentation.fiches_de_missioncreate'); 
Route::post('/fiches_de_mission', [Fiches_de_missionController::class, 'storefiches_de_mission'])->name('documentaion.storefiches_de_mission');

Route::get('/rapport_de_project', [Fiches_de_congéController::class, 'rapport_de_project'])->name('documentation.rapport_de_project');      
Route::get('/documentation', [Fiches_de_congéController::class, 'documentation'])->name('documentation.documentation');      
Route::get('/fiches_de_congé', [Fiches_de_congéController::class, 'fiches_de_congé'])->name('documentation.fiches_de_congé');      
Route::get('/fiches_de_congécreate', [Fiches_de_congéController::class, 'fiches_de_congécreate'])->name('documentation.fiches_de_congécreate'); 
Route::post('/fiches_de_congé', [Fiches_de_congéController::class, 'storefiches_de_congé'])->name('documentaion.storefiches_de_congé');


Route::get('/logistique', [Resumé_logistiqueController::class, 'logistique'])->name('resumes.logistique');      
Route::get('/logistiquecreate', [Resumé_logistiqueController::class, 'logistiquecreate'])->name('resumes.logistiquecreate'); 
Route::post('/logistique', [Resumé_logistiqueController::class, 'storelogistique'])->name('resumes.storelogistique'); 


Route::get('/administrative', [Resumé_administrativeController::class, 'administrative'])->name('resumes.administrative');      
Route::get('/administrativecreate', [Resumé_administrativeController::class, 'administrativecreate'])->name('resumes.administrativecreate'); 
Route::post('/administrative', [Resumé_administrativeController::class, 'storeadministrative'])->name('resumes.storeadministrative'); 

Route::get('/protection', [Resumé_protectionController::class, 'protection'])->name('resumes.protection');      
Route::get('/protectioncreate', [Resumé_protectionController::class, 'protectioncreate'])->name('resumes.protectioncreate'); 
Route::post('/protection', [Resumé_protectionController::class, 'storeprotection'])->name('resumes.storeprotection'); 

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
