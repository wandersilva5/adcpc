<?php

namespace App\Http\Controllers;

use App\Models\Ofertas;
use App\Models\User;
use Illuminate\Http\Request;

class OfertasController extends Controller
{

    public function index(Ofertas $ofertas, User $user)
    {
        $list_ofertas = $ofertas->whereDate('created_at', date("Y-m-d"))
        ->orderBy('id', 'DESC')->get();
        $lista = $ofertas->tipoOferta;
        return view('ofertas.index', compact('list_ofertas' ,'lista'));
    }


    public function store(Request $request, ofertas $ofertas)
    {
        $data = $request->all();
        $salvar = $ofertas->create($data);
        if($salvar){
            return redirect()->route('ofertas.index')->with('success', 'Oferta salvo com sucesso!!');
        }else{
            return redirect()->back()->with('error', 'Aconteceu um erro! Tente novamente, caso o erro persistir, informe o administrador.');
        }
    }


    public function destroy(Ofertas $ofertas, $id)
    {
        $destroy = $ofertas->where('id', $id)->delete();
        if($destroy){
            return redirect()->route('ofertas.index', $id)->with('success', 'Oferta deletado com sucesso!!');
        }else{
            return redirect()->back()->with('error', 'Aconteceu um erro! Tente novamente, caso o erro persistir, informe o administrador.');
        }
    }
}
