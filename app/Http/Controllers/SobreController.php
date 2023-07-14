<?php

namespace App\Http\Controllers;

class SobreController
{
    // Função responsável por exibir a página de contato
    public function sobre()
    {
        // Retorna a visualização (view) chamada "contact"
        return view('about');
    }
}
