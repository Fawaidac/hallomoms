<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BreastfeedingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PregnantController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
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
//     return view('layouts.pages.home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/pregnant', [ServicesController::class, 'pregnant'])->name('services.pregnant');
Route::get('/services/breastfeeding', [ServicesController::class, 'breastfeeding'])->name('services.breastfeeding');
Route::get('/article', [ArtikelController::class, 'index'])->name('article');
Route::get('/detail-article/{id}', [ArtikelController::class, 'show'])->name('article.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.act');
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

Route::get('/article-admin', [ArtikelController::class, 'view'])->name('admin.article');
Route::post('/article-admin-add', [ArtikelController::class, 'add'])->name('admin.article.store');
Route::put('/article-admin-edit/{id}', [ArtikelController::class, 'edit'])->name('admin.article.update');
Route::get('/article-admin-delete/{id}', [ArtikelController::class, 'destroy'])->name('admin.article.delete');

Route::get('/team-admin', [TeamController::class, 'index'])->name('admin.team');
Route::post('/team-admin-add', [TeamController::class, 'add'])->name('admin.team.store');
Route::put('/team-admin-edit/{id}', [TeamController::class, 'edit'])->name('admin.team.update');
Route::get('/team-admin-delete/{id}', [TeamController::class, 'destroy'])->name('admin.team.delete');

Route::get('/feedback-admin', [FeedbackController::class, 'index'])->name('admin.feedback');
Route::post('/feedback-admin-add', [FeedbackController::class, 'add'])->name('admin.feedback.store');
Route::get('/feedback-admin-delete/{id}', [FeedbackController::class, 'destroy'])->name('admin.feedback.delete');

Route::get('/pregnant-admin', [PregnantController::class, 'view'])->name('admin.pregnant');
Route::post('/pregnant-admin-add', [PregnantController::class, 'add'])->name('admin.pregnant.store');
Route::put('/pregnant-admin-edit/{id}', [PregnantController::class, 'edit'])->name('admin.pregnant.update');
Route::get('/pregnant-admin-delete/{id}', [PregnantController::class, 'destroy'])->name('admin.pregnant.delete');

Route::get('/breastfeeding-admin', [BreastfeedingController::class, 'view'])->name('admin.breastfeeding');
Route::post('/breastfeeding-admin-add', [BreastfeedingController::class, 'add'])->name('admin.breastfeeding.store');
Route::put('/breastfeeding-admin-edit/{id}', [BreastfeedingController::class, 'edit'])->name('admin.breastfeeding.update');
Route::get('/breastfeeding-admin-delete/{id}', [BreastfeedingController::class, 'destroy'])->name('admin.breastfeeding.delete');
