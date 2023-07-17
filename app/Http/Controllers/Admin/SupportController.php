<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all();

        return view('admin.supports.index', compact('supports'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(HttpRequest $request)
    {
        dd($request->all());
    }

}
