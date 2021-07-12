<?php

use App\Models\Make;
use App\Models\Voiture;
use App\Http\Livewire\Store;
use App\Http\Livewire\ShowCars;
use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    // dd(Voiture::limit(6)->get());
    return view('index', ['make' => Voiture::limit(8)->get()]);
});


Route::get('add', function () {
    return view('add_car');
})->name('voiture.add');


Route::post('voiture/add', [Controller::class, 'store'])->name('voiture.ajout');
Route::get('store', Store::class)->name('voiture.store');
Route::get('ajax-autocomplete-search', [Controller::class, 'selectSearch']);
Route::get('ajax-autocomplete-search-modele', [Controller::class, 'selectSearchModele']);
Route::get('/voiture/{id}', ShowCars::class)->name('voiture.show');
