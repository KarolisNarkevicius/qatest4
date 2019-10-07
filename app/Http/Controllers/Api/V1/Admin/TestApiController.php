<?php

namespace App\Http\Controllers\Api\V1\Admin;

use Gate;
use App\Test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTestRequest;
use App\Http\Requests\UpdateTestRequest;
use App\Http\Resources\Admin\TestResource;
use Symfony\Component\HttpFoundation\Response;


class TestApiController extends Controller  {





function index()
{
    abort_if(Gate::denies('test_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return new TestResource(Test::all());
    
}

function store(StoreTestRequest $request)
{
    



$test = Test::create($request->all());


return (new TestResource($test))
->response()
->setStatusCode(Response::HTTP_CREATED);
    
}

function show(Test $test)
{
    abort_if(Gate::denies('test_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return new TestResource($test);
    
}

function update(UpdateTestRequest $request, Test $test)
{
    



$test->update($request->all());


return (new TestResource($test))
->response()
->setStatusCode(Response::HTTP_ACCEPTED);
    
}

function destroy(Test $test)
{
    abort_if(Gate::denies('test_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$test->delete();
return response(null, Response::HTTP_NO_CONTENT);
    
}


}