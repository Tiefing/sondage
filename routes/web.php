<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\SondageController;
use App\Http\Controllers\AuthController;

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

Route::get('/hh', function () {
    return view('index');
});

Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'doLogin']);
Route::delete('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/publique', function(){
    return redirect()->route('index');
});
Route::get('/creersondage', [SondageController:: class,'creersondage'])->name('creersondage');
Route::post('/reponse/sondage', [SondageController::class, 'reponse'])->name('reponse');


Route::get('/', [SondageController::class, 'index'])->name('index');
Route::resource('/sondages', SondageController::class);//->middleware('auth');

Route::resource('/question', QuestionController::class);

//ROute::get('/publique', [AuthController::class, 'publique'])->name('publique');








Route::get('/createg', [SurveyController::class, 'showCreateSurveyForm'])->name('create-survey');
Route::post('/surveys', [SurveyController::class, 'store'])->name('surveys.store');

