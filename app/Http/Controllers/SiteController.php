<?php

namespace App\Http\Controllers;

class SiteController
{
    // Função responsável por exibir a página de contato
    public function contact()
    {
        // Retorna a visualização (view) chamada "contact"
        return view('contact');
    }
}
