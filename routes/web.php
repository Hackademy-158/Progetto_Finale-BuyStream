<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\IsRevisor;

// Main Section -> Main Routes (Navbar)
Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/contatti', [PublicController::class, 'contact'])->name('contact');
Route::get('/chi-siamo', [PublicController::class, 'about'])->name('about');

// Sub Section -> Main Routes
Route::get('/caratteristiche', [PublicController::class, 'features'])->name('features');
Route::get('/prezzi', [PublicController::class, 'pricing'])->name('pricing');
Route::get('/faq', [PublicController::class, 'faq'])->name('faq');

// Sub Section -> Social Routes
Route::get('/social', [PublicController::class, 'social'])->name('social');

// Article Section
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
Route::get('/article/byCategory/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');
Route::get('/search/article', [PublicController::class, 'searched'])->name('article.search');
Route::get('/catalogo/ricerca', [PublicController::class, 'searched'])->name('articles.search');

// User Dashboard Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/articoli', [DashboardController::class, 'articles'])->name('dashboard.articles');
    Route::get('/dashboard/profilo', [DashboardController::class, 'profile'])->name('dashboard.profile');
});

// Revisor Area
Route::middleware(['isRevisor'])->group(function () {
    Route::get('/revisor/dashboard', [RevisorController::class, 'index'])->name('revisor.dashboard');
    Route::get('/revisor/approvati', [RevisorController::class, 'approved'])->name('revisor.approved');
    Route::patch('/accetta/{article}', [RevisorController::class, 'accept'])->name('accept');
    Route::get('/revisor/statistiche', [RevisorController::class, 'stats'])->name('revisor.stats');
    Route::get('/revisor/in-attesa', [RevisorController::class, 'pending'])->name('revisor.pending');
    Route::patch('/revisor/rifiutati', [RevisorController::class, 'refused'])->name('reject');
});

// Revisor Routes
Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
