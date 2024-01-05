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

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('isNoAuth');
Route::get('/about', [AboutController::class, 'index'])->name('about')->middleware('isNoAuth');
Route::get('/services', [ServicesController::class, 'index'])->name('services')->middleware('isNoAuth');
Route::get('/services/pregnant', [ServicesController::class, 'pregnant'])->name('services.pregnant')->middleware('isNoAuth');
Route::get('/services/breastfeeding', [ServicesController::class, 'breastfeeding'])->name('services.breastfeeding')->middleware('isNoAuth');
Route::get('/article', [ArtikelController::class, 'index'])->name('article')->middleware('isNoAuth');
Route::get('/detail-article/{id}', [ArtikelController::class, 'show'])->name('article.show')->middleware('isNoAuth');
Route::get('/contact', [ContactController::class, 'index'])->name('contact')->middleware('isNoAuth');

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('isNoAuth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('isAuth');
Route::post('/login-act', [AuthController::class, 'login'])->name('login.act');

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('isAuth');

Route::get('/article-admin', [ArtikelController::class, 'view'])->name('admin.article')->middleware('isAuth');
Route::post('/article-admin-add', [ArtikelController::class, 'add'])->name('admin.article.store')->middleware('isAuth');
Route::put('/article-admin-edit/{id}', [ArtikelController::class, 'edit'])->name('admin.article.update')->middleware('isAuth');
Route::get('/article-admin-delete/{id}', [ArtikelController::class, 'destroy'])->name('admin.article.delete')->middleware('isAuth');

Route::get('/team-admin', [TeamController::class, 'index'])->name('admin.team')->middleware('isAuth');
Route::post('/team-admin-add', [TeamController::class, 'add'])->name('admin.team.store')->middleware('isAuth');
Route::put('/team-admin-edit/{id}', [TeamController::class, 'edit'])->name('admin.team.update')->middleware('isAuth');
Route::get('/team-admin-delete/{id}', [TeamController::class, 'destroy'])->name('admin.team.delete')->middleware('isAuth');

Route::get('/feedback-admin', [FeedbackController::class, 'index'])->name('admin.feedback')->middleware('isAuth');
Route::post('/feedback-admin-add', [FeedbackController::class, 'add'])->name('admin.feedback.store')->middleware('isNoAuth');
Route::get('/feedback-admin-delete/{id}', [FeedbackController::class, 'destroy'])->name('admin.feedback.delete')->middleware('isAuth');

Route::get('/pregnant-admin', [PregnantController::class, 'view'])->name('admin.pregnant')->middleware('isAuth');
Route::post('/pregnant-admin-add', [PregnantController::class, 'add'])->name('admin.pregnant.store')->middleware('isAuth');
Route::put('/pregnant-admin-edit/{id}', [PregnantController::class, 'edit'])->name('admin.pregnant.update')->middleware('isAuth');
Route::get('/pregnant-admin-delete/{id}', [PregnantController::class, 'destroy'])->name('admin.pregnant.delete')->middleware('isAuth');

Route::get('/breastfeeding-admin', [BreastfeedingController::class, 'view'])->name('admin.breastfeeding')->middleware('isAuth');
Route::post('/breastfeeding-admin-add', [BreastfeedingController::class, 'add'])->name('admin.breastfeeding.store')->middleware('isAuth');
Route::put('/breastfeeding-admin-edit/{id}', [BreastfeedingController::class, 'edit'])->name('admin.breastfeeding.update')->middleware('isAuth');
Route::get('/breastfeeding-admin-delete/{id}', [BreastfeedingController::class, 'destroy'])->name('admin.breastfeeding.delete')->middleware('isAuth');
