<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // =================ENTRADA======================//
        $data = DB::table('dizimos')
        ->select('valor', DB::raw('SUM(valor) as valor'))
        ->whereMonth('created_at', date("m"))
        ->groupBy('valor')
        ->get();
        
        $data2 = DB::table('ofertas')
        ->select('valor', DB::raw('SUM(valor) as valor'))
        ->whereMonth('created_at', date("m"))
        ->groupBy('valor')
        ->get();
        $entrada = $data->sum('valor') + $data2->sum('valor');
        // =================ENTRADA======================//

        // =================MEMBROS======================//
        $membros = DB::table('users')->count();
        // =================MEMBROS======================//

        // dd($entrada);

        return view('home', compact('entrada', 'membros'));
    }

    
}
