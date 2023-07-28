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

        if (!$support)
        {
            return back(); // Manda de volta
        }

        return view('admin.supports.show', compact('support'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(Request $request, Support $support)
    {
        $data = $request->all();
        $data['status'] = 'a';

        // Corrigir para atribuir o valor do campo 'description' ao campo 'body'
        $data['body'] = $data['description'] ?? null;

        Support::create($data);

        return redirect()->route('supports.index');
    }

    public function edit(Support $support, string|int $id) 
    {
        if (!$support = $support->where('id', $id)->first()) {
            return back();
        };

        return view('admin.supports.edit', compact('support'));
    }

    public function update(Request $request, Support $support, string $id) 
    {
        if (!$support = $support->find($id)) {
            return back();
        };

        $support->update($request->only([
            'subject', 'body'
        ]));

        return redirect()->route('supports.index');
    }



}
