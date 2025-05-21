<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColaboradorController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/create-colaboradores', function () {
    return view('create-colaboradores');
    //echo "Formulário de Cadastro de Colaboradores";
});

Route::get('/edit-colaboradores', function () {
    return view('edit-colaboradores');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/colaboradores-store', [ColaboradorController::class, 'store'])->name('colaborador.store');
