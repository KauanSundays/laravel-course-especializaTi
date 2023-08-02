<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\Admin\SupportController;
use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', function () {
    // Retorna a visualização (view) chamada 'welcome'
    return view('welcome');
});

// Rotas para o CRUD do modelo Support
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

// Rota para a página de contato, usando o controlador SiteController
Route::get('/contato', [SiteController::class, 'contact']);

// Rota para a página "sobre", usando o controlador SobreController
Route::get('/sobre', [SobreController::class, 'sobre']);

Route::delete('/supports/{support}', [SupportController::class, 'delete'])->name('supports.delete');

// Route::get: É um método do Laravel que define uma rota HTTP GET. Isso significa que essa rota responderá apenas a solicitações GET feitas para a URL especificada.
// '/contato': É o URL (endereço) da rota. Nesse caso, a rota corresponde à URL '/contato'. Quando um usuário acessar essa URL, a função correspondente será executada.
// [SiteController::class, 'contact']: É uma representação de um controlador e um método que serão executados quando a rota for acessada. Nesse caso, o controlador é SiteController e o método é contact.
// SiteController::class: Refere-se à classe SiteController, que é responsável por controlar a lógica relacionada às ações do site.
// 'contact': É o nome do método no controlador SiteController que será executado quando a rota for acessada. No caso específico, o método contact será chamado.
