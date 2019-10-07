<?php

namespace App\Http\Controllers\Api\V1\Admin;

use Gate;
use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\UpdatePermissionRequest;
use App\Http\Resources\Admin\PermissionResource;


class PermissionsApiController extends Controller  {





function index()
{
    abort_if(Gate::denies('permission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return new PermissionResource(Permission::all());
    
}

function store(StorePermissionRequest $request)
{
    



$permission = Permission::create($request->all());


return (new PermissionResource($permission))
->response()
->setStatusCode(Response::HTTP_CREATED);
    
}

function show(Permission $permission)
{
    abort_if(Gate::denies('permission_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return new PermissionResource($permission);
    
}

function update(UpdatePermissionRequest $request, Permission $permission)
{
    



$permission->update($request->all());


return (new PermissionResource($permission))
->response()
->setStatusCode(Response::HTTP_ACCEPTED);
    
}

function destroy(Permission $permission)
{
    abort_if(Gate::denies('permission_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$permission->delete();
return response(null, Response::HTTP_NO_CONTENT);
    
}


}