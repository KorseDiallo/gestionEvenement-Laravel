<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Models\Evenement;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $evenements= Evenement::all();
    return view('client.dashboard',compact('evenements'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/accueilClient', function () {
    return view('client.accueilClient');
});

Route::get('/accueilAssociation', function () {
    return view('association.accueilAssociation');
});



Route::get('/formulaireInscriptionAssociation', [AssociationController::class,"create"]);

Route::post('/formulaireInscriptionAssociation', [AssociationController::class,"store"]);

Route::get('/formulaireConnexionAssociation', [AssociationController::class,"index"]);

Route::post('/connextionAssoc', [AssociationController::class,"logginAssoc"]);


Route::get('/ajouterEvenement', [EvenementController::class,"create"]);

Route::post("/ajouterEvenement",[EvenementController::class,"store"]);

Route::get('/supprimerEvenement/{evenement}', [EvenementController::class,"destroy"]);

Route::get('/modifierEvenement/{evenement}', [EvenementController::class,"edit"]);

Route::post('/modifierEvenement/{evenement}', [EvenementController::class,"update"]);

Route::get('/faireReservation/{evenement}',[ReservationController::class,"create"]);

Route::post('/faireReservation/{evenement}',[ReservationController::class,"store"]);



// Route::middleware(['auth'])->group(function () {
    
// });
// Route::get("/PageAssociation",[AssociationController::class,"dashboard"]);


require __DIR__.'/auth.php';
