<?php

use App\Http\Controllers\ClientController;
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

// Authentification
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Matchs
Route::get('/', 'MatchController@index')->name('pari.index');
Route::get('/index', 'MatchController@index')->name('pari.index');
Route::get('/paris/{match}', 'MatchController@show')->name('pari.show');

// Utilisateur
Route::get('users/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::patch('users/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('users{user}', [UserController::class, 'destroy'])->name('user.delete');

// Administrateur
Route::get('admin', 'AdminController@index')->name('admin.index');
Route::get('admin/create', 'AdminController@create')->name('admin.create');
Route::post('admin', 'AdminController@store')->name('admin.store');
Route::get('admin/{match}', 'AdminController@show')->name('admin.show');
Route::get('admin/{match}/edit', 'AdminController@edit')->name('admin.edit');
Route::patch('admin/{match}', 'AdminController@update')->name('admin.update');
Route::delete('admin/{match}', 'AdminController@destroy')->name('admin.destroy');
