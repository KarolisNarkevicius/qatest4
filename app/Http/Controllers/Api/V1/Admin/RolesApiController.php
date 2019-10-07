<?php

namespace App\Http\Controllers\Api\V1\Admin;

use Gate;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Http\Resources\Admin\RoleResource;
use Symfony\Component\HttpFoundation\Response;


class RolesApiController extends Controller  {





function index()
{
    abort_if(Gate::denies('role_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return new RoleResource(Role::with(['permissions'])->get());
    
}

function store(StoreRoleRequest $request)
{
    



$role = Role::create($request->all());
$role->permissions()->sync($request->input('permissions', []));

return (new RoleResource($role))
->response()
->setStatusCode(Response::HTTP_CREATED);
    
}

function show(Role $role)
{
    abort_if(Gate::denies('role_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return new RoleResource($role->load(['permissions']));
    
}

function update(UpdateRoleRequest $request, Role $role)
{
    



$role->update($request->all());
$role->permissions()->sync($request->input('permissions', []));

return (new RoleResource($role))
->response()
->setStatusCode(Response::HTTP_ACCEPTED);
    
}

function destroy(Role $role)
{
    abort_if(Gate::denies('role_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$role->delete();
return response(null, Response::HTTP_NO_CONTENT);
    
}


}