<?php

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
    return view('accueil');
});

Route::get('/ateliers', function () {
    return view('ateliers');
})->name('ateliers');

Route::get('/produits', function () {
    return view('produits');
})->name('produits');

Route::get('/a-propos', function () {
    return view('apropos');
})->name('apropos');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/detailsA', function () {
    return view('detailsA');
})->name('detailsA');

Route::get('/detailsP', function () {
    return view('detailsP');
})->name('detailsP');

?>
