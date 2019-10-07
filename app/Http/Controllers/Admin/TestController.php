<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;
use App\Http\Requests\MassDestroyTestRequest;
use Symfony\Component\HttpFoundation\Response;


class TestController extends Controller  {





function index()
{
    abort_if(Gate::denies('test_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');



$tests = Test::all();




    return view('admin.tests.index', compact('tests'));
}

function create()
{
    abort_if(Gate::denies('test_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.tests.create');
}

function store(StoreTestRequest $request)
{
    



$test = Test::create($request->all());



return redirect()->route('admin.tests.index');
    
}

function edit(Test $test)
{
    abort_if(Gate::denies('test_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.tests.edit', compact('test'));
}

function update(UpdateTestRequest $request, Test $test)
{
    



$test->update($request->all());



return redirect()->route('admin.tests.index');
    
}

function show(Test $test)
{
    abort_if(Gate::denies('test_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.tests.show', compact('test'));
}

function destroy(Test $test)
{
    abort_if(Gate::denies('test_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$test->delete();
return back();
    
}

function massDestroy(MassDestroyTestRequest $request)
{
    



Test::whereIn('id', request('ids'))->delete();
return response(null, Response::HTTP_NO_CONTENT);
    
}


}