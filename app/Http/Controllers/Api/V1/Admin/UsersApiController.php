<?php

namespace App\Http\Controllers\Api\V1\Admin;

use Gate;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\Admin\UserResource;
use Symfony\Component\HttpFoundation\Response;


class UsersApiController extends Controller  {





function index()
{
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return new UserResource(User::with(['roles'])->get());
    
}

function store(StoreUserRequest $request)
{
    



$user = User::create($request->all());
$user->roles()->sync($request->input('roles', []));

return (new UserResource($user))
->response()
->setStatusCode(Response::HTTP_CREATED);
    
}

function show(User $user)
{
    abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return new UserResource($user->load(['roles']));
    
}

function update(UpdateUserRequest $request, User $user)
{
    



$user->update($request->all());
$user->roles()->sync($request->input('roles', []));

return (new UserResource($user))
->response()
->setStatusCode(Response::HTTP_ACCEPTED);
    
}

function destroy(User $user)
{
    abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$user->delete();
return response(null, Response::HTTP_NO_CONTENT);
    
}


}