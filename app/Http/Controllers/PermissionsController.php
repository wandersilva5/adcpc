<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;

class PermissionsController extends Controller
{
    protected $role;
    protected $permission;
    protected $request;

    public function __construct(Role $role, Request $request, Permission $permission)
    {
        $this->role        = $role;
        $this->permission  = $permission;
        $this->request     = $request;
    }

    public function index()
    {
        $permissions = $this->role->all();
        return view('permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('permissions.create');
    }

    public function store()
    {
        $data = $this->request->except('_token');

        $inserir = $this->permission->create($data);
        if($inserir){
            return redirect()->route('permissions.create')->with('success', 'Salvo com sucesso! Mais uma permissão cadastrado!');
        }else{
            return redirect()->back()->with('error', 'Aconteceu um erro! Tente novamente, caso o erro persistir, informe o administrador.');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
