<?php

use App\Http\Controllers\ArticlesController;
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

Route::get('/', [ArticlesController::class, 'index'])->name('index');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/artikel/beheer',\App\Http\Livewire\ArtikelBeheer::class)->name('artikel-beheer');
    Route::get('/artikel/toevoegen',\App\Http\Livewire\ArtikelToevoegen::class)->name('artikel-toevoegen');
    Route::get('/artikel/wijzigen',\App\Http\Livewire\ArtikelWijzigen::class)->name('artikel-wijzigen');
    Route::get('/docent/aanmaken',\App\Http\Livewire\DocentAanmaken::class)->name('docent-aanmaken');
});

Route::group(['middleware' => ['role:user|role:admin']], function () {
    Route::get('/gegevens/bewerken',\App\Http\Livewire\ProfielBewerken::class)->name('profiel-bewerken');
});

Route::get('/artikel/overzicht',\App\Http\Livewire\ArtikelOverzicht::class)->name('artikel-overzicht');

Route::get('/artikel/bekijken',\App\Http\Livewire\ArtikelBekijken::class)->name('artikel-bekijken');

Route::get('/vraag/overzicht',\App\Http\Livewire\vragenOverzicht::class)->name('vragen-overzicht');

Route::get('/vraag/bekijken',\App\Http\Livewire\VraagBekijken::class)->name('vraag-bekijken');

Route::get('/onderwerpen',\App\Http\Livewire\Onderwerpen::class)->name('onderwerpen');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
