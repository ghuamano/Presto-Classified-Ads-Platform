<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RevisorController;
use App\Http\Middleware\IsRevisor;
use illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::resource('articles', ArticleController::class);
Route::get('/articles/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');
Route::get('/articles/user/{userId}', [ArticleController::class, 'byUser'])->name('byUser');


// Rotte per modificare middleware is_revisor
Route::middleware(['isRevisor'])->group(function () {
    Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
    Route::patch('accept/{article}', [RevisorController::class, 'accept'])->name('accept');
    Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');
});


Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->middleware('auth')->name('article.edit');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->middleware('auth')->name('article.update');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');


//Revisore
// Route::get('/revisor/form', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/become/revisor', [RevisorController::class, 'revisorForm'])->name('revisor.form');
Route::post('/revisor/submit', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
Route::get('/reject/revisor/{user}', [RevisorController::class, 'rejectRevisor'])->name('reject.revisor');

// ricerca
Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('article.search');

// rotte footer
Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('chi-siamo');

Route::get('/termini-e-condizioni', function () {
    return view('termini');
})->name('termini');

// Rotte cambio lingua
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');
// Rotta email di contatti
Route::get('/contact', [ContactController::class, 'contacts'])->name('contatti');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Rotte profilo
Route::get('/profilo', [ArticleController::class, 'profile'])->name('profile');
Route::get('/profilo/modifica', [ArticleController::class, 'editProfile'])->name('profile.edit');
