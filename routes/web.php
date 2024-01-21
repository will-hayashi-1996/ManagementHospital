<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\MedicoController;

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
Route::get('/', [MedicoController::class, 'index']);


Route::get('/inserir', function () {
    return view('inicio');
})->name('inserir');

Route::get('/update/{medico}', [MedicoController::class, 'show'])->name('update');

Route::get('/destroy/{medico}', [MedicoController::class, 'destroy'])->name('destroy');

Route::get('/show', [MedicoController::class, 'index'])->name('show');

Route::get('/pesquisar/{num}', [MedicoController::class, 'pesquisar'])->name('pesquisar');

Route::get('/pesquisar-cpf/{cpf?}', [MedicoController::class, 'pesquisarCPF'])->name('pesquisar-cpf');

Route::get('/pesquisar-crm/{crm?}', [MedicoController::class, 'pesquisar_crm'])->name('pesquisar-crm');

Auth::routes();

//Route::apiResource('internet-plans', MedicoController::class);

Route::resource('medico',MedicoController::class);

Route::get('/home', [MedicoController::class, 'index'])->name('home');
