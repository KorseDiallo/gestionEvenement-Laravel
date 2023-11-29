<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ProfileController;
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
    return view('client.dashboard');
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


// Route::middleware(['auth'])->group(function () {
    
// });
// Route::get("/PageAssociation",[AssociationController::class,"dashboard"]);


require __DIR__.'/auth.php';
