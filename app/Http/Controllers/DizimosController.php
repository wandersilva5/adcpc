<?php

namespace App\Http\Controllers;

use App\Dizimos;
use Illuminate\Http\Request;

class DizimosController extends Controller
{

    public function index(Dizimos $dizimos)
    {
        $dizimos = $dizimos->all();
        return view('dizimos.index', compact('dizimos'));
    }

    public function create(Dizimos $dizimos)
    {
        $dizimos = $dizimos->all();
        return view('dizimos.index', compact('dizimos'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Dizimos $dizimos)
    {
        //
    }

    public function edit(Dizimos $dizimos)
    {
        //
    }

    public function update(Request $request, Dizimos $dizimos)
    {
        //
    }

    public function destroy(Dizimos $dizimos)
    {
        //
    }
}
