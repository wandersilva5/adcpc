<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;

class RolesController extends Controller
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
        $roles = $this->role->all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = $this->permission->all();
        return view('roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $permissions = $this->permission->all();
        $roles = $this->role->where('id', $id)->get();
        dd();
        return view('roles.edit', compact('permissions', 'roles'));
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
