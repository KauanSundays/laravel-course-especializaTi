<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request; // Importe a classe Request correta
use Illuminate\Http\RedirectResponse;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();

        return view('admin.supports.index', compact('supports'));
    }

    public function show(string|int $id) 
    {
        $support = Support::find($id);
        dd($support);
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(Request $request, Support $support)
    {
        $data = $request->all();
        $data['status'] = 'a';

        $support['body'] = $supprt['body'] ?? null; // Define o campo 'body' como nulo caso não seja fornecido

        Support::create($data);

        return redirect()->route('supports.index');
    }


}
