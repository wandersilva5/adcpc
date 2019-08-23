<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoricsController extends Controller
{
    public function index()
    {
    // =================LISTA====================//
       
        $list_ofertas = '';
        return view('historics.index', compact('list_ofertas'));
    }
}
