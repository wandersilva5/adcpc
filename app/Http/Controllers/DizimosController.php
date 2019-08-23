<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dizimos;
use App\Models\User;
use Auth;

class DizimosController extends Controller
{

    public function index(Dizimos $dizimos, User $user)
    {
        $list_dizimos = $dizimos->whereDate('created_at', date("Y-m-d"))
        ->orderBy('id', 'DESC')->get();
        
        $list_user = $user->pluck('name', 'id');
        
        $lista = $dizimos->tipoOferta;
        
        $data = $dizimos->select('valor', DB::raw('SUM(valor) as valor'))
        ->whereDate('created_at', date("Y-m-d"))
        ->groupBy('valor')
        ->get();
        $somaDizimo = $data->sum('valor');

        return view('dizimos.index', compact('list_dizimos', 'lista', 'list_user', 'somaDizimo'));
        
    }


    public function store(Request $request, Dizimos $dizimos)
    {
        $data = $request->all();
        $salvar = $dizimos->create($data);
      
        $historics = $dizimos->historics()->create([
            'user_id'           => Auth::user()->id, 
            'origem'            => 'DIZIMO', 
            'tipo_movimentacao' => 'ENTRADA', 
            'data'              => date('Y-m-d'),
            'id_tipo'           => $salvar->id
        ]);
            
        if($salvar && $historics){
            return redirect()->route('dizimos.index')->with('success', 'Dízimo salvo com sucesso!!');
        }else{
            return redirect()->back()->with('error', 'Aconteceu um erro! Tente novamente, caso o erro persistir, informe o administrador.');
        }
    }


    public function destroy($id)
    {
        $destroy = Dizimos::where('id', $id)->delete();
        if($destroy){
            return redirect()->route('dizimos.index', $id)->with('success', 'Dízimo deletado com sucesso!!');
        }else{
            return redirect()->back()->with('error', 'Aconteceu um erro! Tente novamente, caso o erro persistir, informe o administrador.');
        }
    }
}
