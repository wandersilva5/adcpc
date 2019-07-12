<?php

namespace App\Http\Controllers;

use App\Dizimos;
use App\User;
use Illuminate\Http\Request;

class DizimosController extends Controller
{

    public function index(Dizimos $dizimos, User $user)
    {
        $list_dizimos = $dizimos->orderBy('id', 'DESC')->get();
        $list_user = $user->select('name')->pluck('name');
        $lista = $dizimos->tipoOferta;
        return view('dizimos.index', compact('list_dizimos', 'lista', 'list_user'));
    }

    public function create(Dizimos $dizimos)
    {
        
    }

    public function store(Request $request, Dizimos $dizimos)
    {
        $data = $request->all();
        $salvar = $dizimos->create($data);
        if($salvar){
            return redirect()->route('dizimos.index')->with('success', 'Oferta ou Dízimo salvo com sucesso!!');
        }else{
            return redirect()->back()->with('error', 'Aconteceu um erro! Tente novamente, caso o erro persistir, informe o administrador.');
        }
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

    public function destroy($id)
    {
        $destroy = Dizimos::where('id', $id)->delete();
        if($destroy){
            return redirect()->route('dizimos.index', $id)->with('success', 'Oferta ou Dízimo deletado com sucesso!!');
        }else{
            return redirect()->back()->with('error', 'Aconteceu um erro! Tente novamente, caso o erro persistir, informe o administrador.');
        }
    }
}
