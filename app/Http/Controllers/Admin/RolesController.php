<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Role;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Http\Requests\MassDestroyRoleRequest;
use Symfony\Component\HttpFoundation\Response;


class RolesController extends Controller  {





function index()
{
    abort_if(Gate::denies('role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');



$roles = Role::all();




    return view('admin.roles.index', compact('roles'));
}

function create()
{
    abort_if(Gate::denies('role_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');



$permissions = Permission::all()->pluck('title', 'id');




    return view('admin.roles.create', compact('permissions'));
}

function store(StoreRoleRequest $request)
{
    



$role = Role::create($request->all());
$role->permissions()->sync($request->input('permissions', []));


return redirect()->route('admin.roles.index');
    
}

function edit(Role $role)
{
    abort_if(Gate::denies('role_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');



$permissions = Permission::all()->pluck('title', 'id');



$role->load('permissions');

    return view('admin.roles.edit', compact('permissions', 'role'));
}

function update(UpdateRoleRequest $request, Role $role)
{
    



$role->update($request->all());
$role->permissions()->sync($request->input('permissions', []));


return redirect()->route('admin.roles.index');
    
}

function show(Role $role)
{
    abort_if(Gate::denies('role_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$role->load('permissions');

    return view('admin.roles.show', compact('role'));
}

function destroy(Role $role)
{
    abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$role->delete();
return back();
    
}

function massDestroy(MassDestroyRoleRequest $request)
{
    



Role::whereIn('id', request('ids'))->delete();
return response(null, Response::HTTP_NO_CONTENT);
    
}


}