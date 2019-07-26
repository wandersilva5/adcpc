<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;

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
        //
    }

    public function create()
    {
        //
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
