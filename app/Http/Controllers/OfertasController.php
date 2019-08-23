<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ofertas;
use App\Models\User;

class OfertasController extends Controller
{

    public function index(Ofertas $ofertas, User $user)
    {
        $list_ofertas = $ofertas->whereDate('created_at', date("Y-m-d"))
        ->orderBy('id', 'DESC')->get();
        $lista = $ofertas->tipoOferta;

        $data = $ofertas->select('valor', DB::raw('SUM(valor) as valor'))
        ->whereDate('created_at', date("Y-m-d"))
        ->groupBy('valor')
        ->get();
        $somaOferta = $data->sum('valor');

        return view('ofertas.index', compact('list_ofertas' ,'lista', 'somaOferta'));
    }


    public function store(Request $request, ofertas $ofertas)
    {
        $data = $request->all();
        $salvar = $ofertas->create($data);

        $historics = $dizimos->historics()->create([
            'user_id'           => Auth::user()->id, 
            'origem'            => 'OFERTA', 
            'tipo_movimentacao' => 'ENTRADA', 
            'data'              => date('Y-m-d'),
            'id_tipo'           => $salvar->id
        ]);

        if($salvar && $historics){
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
