<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', function () {
    // Retorna a visualização (view) chamada 'welcome'
    return view('welcome');
});

// Rota para a página de contato, usando o controlador SiteController
Route::get('/contato', [SiteController::class, 'contact']);
