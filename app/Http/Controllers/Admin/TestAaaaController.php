<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\TestAaaa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestAaaaRequest;
use App\Http\Requests\UpdateTestAaaaRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\MassDestroyTestAaaaRequest;


class TestAaaaController extends Controller  {





function index()
{
    abort_if(Gate::denies('test_aaaa_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');



$testAaaas = TestAaaa::all();




    return view('admin.testAaaas.index', compact('testAaaas'));
}

function create()
{
    abort_if(Gate::denies('test_aaaa_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.testAaaas.create');
}

function store(StoreTestAaaaRequest $request)
{
    



$testAaaa = TestAaaa::create($request->all());



return redirect()->route('admin.test-aaaas.index');
    
}

function edit(TestAaaa $testAaaa)
{
    abort_if(Gate::denies('test_aaaa_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.testAaaas.edit', compact('testAaaa'));
}

function update(UpdateTestAaaaRequest $request, TestAaaa $testAaaa)
{
    



$testAaaa->update($request->all());



return redirect()->route('admin.test-aaaas.index');
    
}

function show(TestAaaa $testAaaa)
{
    abort_if(Gate::denies('test_aaaa_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');





    return view('admin.testAaaas.show', compact('testAaaa'));
}

function destroy(TestAaaa $testAaaa)
{
    abort_if(Gate::denies('test_aaaa_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$testAaaa->delete();
return back();
    
}

function massDestroy(MassDestroyTestAaaaRequest $request)
{
    



TestAaaa::whereIn('id', request('ids'))->delete();
return response(null, Response::HTTP_NO_CONTENT);
    
}


}