<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\CategorieProduitController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


// Route::resource('categories', CategorieController::class);

Route::prefix("admin")->group(function () {

    Route::get('employes', [App\Http\Controllers\EmployeController::class, 'index'])->name('employes');
    Route::post('employes', [App\Http\Controllers\EmployeController::class, 'store'])->name('storeEmploye');
    Route::put('employes/{id}', [App\Http\Controllers\EmployeController::class, 'update']);
    Route::delete('employes/{id}', [App\Http\Controllers\EmployeController::class, 'destroy']);

    Route::get('categories', [App\Http\Controllers\CategorieController::class, 'index'])->name('categories');
    Route::post('categories', [App\Http\Controllers\CategorieController::class, 'store'])->name('storeCategorie');
    Route::put('categories/{id}', [App\Http\Controllers\CategorieController::class, 'update'])->name('updateCategorie');
    Route::delete('categories/{id}', [App\Http\Controllers\CategorieController::class, 'destroy']);

    Route::get('projets', [App\Http\Controllers\ProjetController::class, 'index'])->name('projets');
    Route::post('projets', [App\Http\Controllers\ProjetController::class, 'store'])->name('storeProjet');
    Route::put('projets/{id}', [App\Http\Controllers\ProjetController::class, 'update'])->name('updateProjet');
    Route::delete('projets/{id}', [App\Http\Controllers\ProjetController::class, 'destroy']);

    Route::get('categoriesProduits', [App\Http\Controllers\CategorieProduitController::class, 'index'])->name('categoriesProduits');
    Route::post('categoriesProduits', [App\Http\Controllers\CategorieProduitController::class, 'store'])->name('storeCategorieProduit');
    Route::put('categoriesProduits/{id}', [App\Http\Controllers\CategorieProduitController::class, 'update'])->name('updateCategorieProduits');
    Route::delete('categoriesProduits/{id}', [App\Http\Controllers\CategorieProduitController::class, 'destroy']);


    Route::get('stock', [App\Http\Controllers\ProduitController::class, 'index'])->name('stock');
    Route::post('stock', [App\Http\Controllers\ProduitController::class, 'store'])->name('storeProduit');
    Route::put('stock/{id}', [App\Http\Controllers\ProduitController::class, 'update'])->name('updateProduits');
    Route::delete('stock/{id}', [App\Http\Controllers\ProduitController::class, 'destroy']);

    Route::get('prestations', [App\Http\Controllers\PrestationController::class, 'index'])->name('prestations');
    Route::post('prestations', [App\Http\Controllers\PrestationController::class, 'store'])->name('storePrestation');
    Route::put('prestations/{id}', [App\Http\Controllers\PrestationController::class, 'update'])->name('updatePrestation');
    Route::delete('prestations/{id}', [App\Http\Controllers\PrestationController::class, 'destroy']);

    Route::get('actualites', [App\Http\Controllers\ActualiteController::class, 'index'])->name('actualites');
    Route::post('actualites', [App\Http\Controllers\ActualiteController::class, 'store'])->name('storeActualite');
    Route::put('actualites/{id}', [App\Http\Controllers\ActualiteController::class, 'update'])->name('updateActualite');
    Route::delete('actualites/{id}', [App\Http\Controllers\ActualiteController::class, 'destroy']);

    Route::get('clientsFideles', [App\Http\Controllers\ClientFideleController::class, 'index'])->name('clientsFideles');
    Route::post('clientsFideles', [App\Http\Controllers\ClientFideleController::class, 'store'])->name('storeclientsFideles');
    Route::put('clientsFideles/{id}', [App\Http\Controllers\ClientFideleController::class, 'update'])->name('updateclientsFideles');
    Route::delete('clientsFideles/{id}', [App\Http\Controllers\ClientFideleController::class, 'destroy']);

    Route::get('devis', [App\Http\Controllers\DevisController::class, 'index'])->name('devis');

    Route::get('fournisseurs', [App\Http\Controllers\FournisseurController::class, 'index'])->name('fournisseurs');
    Route::post('fournisseurs', [App\Http\Controllers\FournisseurController::class, 'store'])->name('storeFournisseurs');
    Route::put('fournisseurs/{id}', [App\Http\Controllers\FournisseurController::class, 'update'])->name('updateFournisseurs');
    Route::delete('fournisseurs/{id}', [App\Http\Controllers\FournisseurController::class, 'destroy']);
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});





Route::get('accueil', [App\Http\Controllers\AccueilController::class, 'index'])->name('index');


Route::get('contact', [App\Http\Controllers\AccueilController::class, 'contact']);
Route::post('contact', [App\Http\Controllers\AccueilController::class, 'store'])->name('store');

Route::get('projet', [App\Http\Controllers\AccueilController::class, 'projet'])->name('projet');

Route::get('/details/{id}', [App\Http\Controllers\AccueilController::class, 'details']);
