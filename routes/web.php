<?php

use App\Http\Controllers\pageController;
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
    return view('welcome');
});


//Route::get('pages','pageController@show');
Route::get('pages',[pageController::class,'show']);
Route::get('pages/{page}',[pageController::class,'onepage']);
//Route::post('pagesstore','pageController@store');
Route::post('pagesstore',[pageController::class,'store'])->name('addArticle');;
Route::get('pages/{page}/delete',[pageController::class,'delete']);
Route::get('pages/{page}/deleteall',[pageController::class,'deleteall']);
//Route::post('pages/{page}/notesstore',[NoteController::class,'store']);
Route::post('pages/{page}/notesstore', 'App\Http\Controllers\NoteController@store');
//Route::get('notes/{note}/edit',[NoteController::class,'edit']);
Route::get('notes/{note}/edit', 'App\Http\Controllers\NoteController@edit');
//Route::post('notes/{note}/update',[NoteController::class,'update']);
Route::post('notes/{note}/update', 'App\Http\Controllers\NoteController@update');
Route::get('notes/{note}/delete', 'App\Http\Controllers\NoteController@delete');
//Route::post('pages/{page}/notestore','NoteController@store');
//Route::post('pages/{page}/notestore','NoteController@store');