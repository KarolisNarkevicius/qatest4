<?php

namespace App\Http\Controllers\Api\V1\Admin;

use Gate;
use App\TestAaaa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestAaaaRequest;
use App\Http\Requests\UpdateTestAaaaRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Admin\TestAaaaResource;


class TestAaaaApiController extends Controller  {





function index()
{
    abort_if(Gate::denies('test_aaaa_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return new TestAaaaResource(TestAaaa::all());
    
}

function store(StoreTestAaaaRequest $request)
{
    



$testAaaa = TestAaaa::create($request->all());


return (new TestAaaaResource($testAaaa))
->response()
->setStatusCode(Response::HTTP_CREATED);
    
}

function show(TestAaaa $testAaaa)
{
    abort_if(Gate::denies('test_aaaa_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return new TestAaaaResource($testAaaa);
    
}

function update(UpdateTestAaaaRequest $request, TestAaaa $testAaaa)
{
    



$testAaaa->update($request->all());


return (new TestAaaaResource($testAaaa))
->response()
->setStatusCode(Response::HTTP_ACCEPTED);
    
}

function destroy(TestAaaa $testAaaa)
{
    abort_if(Gate::denies('test_aaaa_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$testAaaa->delete();
return response(null, Response::HTTP_NO_CONTENT);
    
}


}