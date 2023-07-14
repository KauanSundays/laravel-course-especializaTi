<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\SobreController;
use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', function () {
    // Retorna a visualização (view) chamada 'welcome'
    return view('welcome');
});

// Rota para a página de contato, usando o controlador SiteController
Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/sobre', [SobreController::class, 'sobre']);

//Route::get: É um método do Laravel que define uma rota HTTP GET. Isso significa que essa rota responderá apenas a solicitações GET feitas para a URL especificada.

//'/contato': É o URL (endereço) da rota. Nesse caso, a rota corresponde à URL '/contato'. Quando um usuário acessar essa URL, a função correspondente será executada.

//[SiteController::class, 'contact']: É uma representação de um controlador e um método que serão executados quando a rota for acessada. Nesse caso, o controlador é SiteController e o método é contact.

// SiteController::class: Refere-se à classe SiteController, que é responsável por controlar a lógica relacionada às ações do site.

// 'contact': É o nome do método no controlador SiteController que será executado quando a rota for acessada. No caso específico, o método contact será chamado.