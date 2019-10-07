<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\MassDestroyUserRequest;
use Symfony\Component\HttpFoundation\Response;


class UsersController extends Controller  {





function index()
{
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');



$users = User::all();




    return view('admin.users.index', compact('users'));
}

function create()
{
    abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');



$roles = Role::all()->pluck('title', 'id');




    return view('admin.users.create', compact('roles'));
}

function store(StoreUserRequest $request)
{
    



$user = User::create($request->all());
$user->roles()->sync($request->input('roles', []));


return redirect()->route('admin.users.index');
    
}

function edit(User $user)
{
    abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');



$roles = Role::all()->pluck('title', 'id');



$user->load('roles');

    return view('admin.users.edit', compact('roles', 'user'));
}

function update(UpdateUserRequest $request, User $user)
{
    



$user->update($request->all());
$user->roles()->sync($request->input('roles', []));


return redirect()->route('admin.users.index');
    
}

function show(User $user)
{
    abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$user->load('roles');

    return view('admin.users.show', compact('user'));
}

function destroy(User $user)
{
    abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$user->delete();
return back();
    
}

function massDestroy(MassDestroyUserRequest $request)
{
    



User::whereIn('id', request('ids'))->delete();
return response(null, Response::HTTP_NO_CONTENT);
    
}


}