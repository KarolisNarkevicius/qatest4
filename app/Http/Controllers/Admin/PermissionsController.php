<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\UpdatePermissionRequest;
use App\Http\Requests\MassDestroyPermissionRequest;


class PermissionsController extends Controller  {





function index()
{
    abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');



$permissions = Permission::all();




    return view('admin.permissions.index', compact('permissions'));
}

function create()
{
    abort_if(Gate::denies('permission_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.permissions.create');
}

function store(StorePermissionRequest $request)
{
    



$permission = Permission::create($request->all());



return redirect()->route('admin.permissions.index');
    
}

function edit(Permission $permission)
{
    abort_if(Gate::denies('permission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.permissions.edit', compact('permission'));
}

function update(UpdatePermissionRequest $request, Permission $permission)
{
    



$permission->update($request->all());



return redirect()->route('admin.permissions.index');
    
}

function show(Permission $permission)
{
    abort_if(Gate::denies('permission_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.permissions.show', compact('permission'));
}

function destroy(Permission $permission)
{
    abort_if(Gate::denies('permission_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$permission->delete();
return back();
    
}

function massDestroy(MassDestroyPermissionRequest $request)
{
    



Permission::whereIn('id', request('ids'))->delete();
return response(null, Response::HTTP_NO_CONTENT);
    
}


}