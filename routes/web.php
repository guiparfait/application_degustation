<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\DegustationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('admin.categories.index');
});

Route::resource('categories', CategorieController::class)->middleware('auth');
Route::resource('commentaires', CommentaireController::class)->middleware('auth');
Route::resource('degustations', DegustationController::class)->middleware('auth');
Route::resource('users', UserController::class)->middleware('auth');

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('guest');
Route::get('/home', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/profils/{id}/edit', [UserController::class, 'editprofil'])->name('profils.edit')->middleware('auth');;
Route::post('/profils/{id}', [UserController::class, 'updateprofile'])->name('profils.update')->middleware('auth');;
Route::get('/roles/{id}', [UserController::class, 'role'])->name('users.role');
Route::get('/home/categories', [HomeController::class, 'categorie'])->name('home.categories')->middleware('guest');
Route::get('/home/categories/{id}/details', [HomeController::class, 'categorie_show'])->name('home.categories.show');
Route::get('/home/devs', [HomeController::class, 'developpeur'])->name('home.devs')->middleware('guest');
Route::get('/home/devs/{id}/details', [HomeController::class, 'developpeur_show'])->name('home.devs.show')->middleware('guest');
Route::get('/home/degustations', [HomeController::class, 'degustation'])->name('home.degustations')->middleware('guest');
Route::get('/home/degustations/{id}/details', [HomeController::class, 'degustation_show'])->name('home.degustations.show')->middleware('guest');
Route::get('/deconnection', [UserController::class, 'deconnection'])->name('deconnections')->middleware('auth');
Route::get('/dashboard/degustations', [DegustationController::class, 'unique'])->name('dashboard.degustations')->middleware('auth');
Route::get('/dashboard/degustations/liste', [DegustationController::class, 'liste'])->name('dashboard.degustations.list')->middleware('auth');
