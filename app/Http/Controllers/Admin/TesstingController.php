<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Tessting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTesstingRequest;
use App\Http\Requests\UpdateTesstingRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\MassDestroyTesstingRequest;


class TesstingController extends Controller  {





function index()
{
    abort_if(Gate::denies('tessting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');



$tesstings = Tessting::all();




    return view('admin.tesstings.index', compact('tesstings'));
}

function create()
{
    abort_if(Gate::denies('tessting_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.tesstings.create');
}

function store(StoreTesstingRequest $request)
{
    



$tessting = Tessting::create($request->all());



return redirect()->route('admin.tesstings.index');
    
}

function edit(Tessting $tessting)
{
    abort_if(Gate::denies('tessting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.tesstings.edit', compact('tessting'));
}

function update(UpdateTesstingRequest $request, Tessting $tessting)
{
    



$tessting->update($request->all());



return redirect()->route('admin.tesstings.index');
    
}

function show(Tessting $tessting)
{
    abort_if(Gate::denies('tessting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.tesstings.show', compact('tessting'));
}

function destroy(Tessting $tessting)
{
    abort_if(Gate::denies('tessting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$tessting->delete();
return back();
    
}

function massDestroy(MassDestroyTesstingRequest $request)
{
    



Tessting::whereIn('id', request('ids'))->delete();
return response(null, Response::HTTP_NO_CONTENT);
    
}


}