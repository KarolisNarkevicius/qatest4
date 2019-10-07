<?php

namespace App\Http\Controllers\Api\V1\Admin;

use Gate;
use App\Tessting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTesstingRequest;
use App\Http\Requests\UpdateTesstingRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Admin\TesstingResource;


class TesstingApiController extends Controller  {





function index()
{
    abort_if(Gate::denies('tessting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return new TesstingResource(Tessting::all());
    
}

function store(StoreTesstingRequest $request)
{
    



$tessting = Tessting::create($request->all());


return (new TesstingResource($tessting))
->response()
->setStatusCode(Response::HTTP_CREATED);
    
}

function show(Tessting $tessting)
{
    abort_if(Gate::denies('tessting_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return new TesstingResource($tessting);
    
}

function update(UpdateTesstingRequest $request, Tessting $tessting)
{
    



$tessting->update($request->all());


return (new TesstingResource($tessting))
->response()
->setStatusCode(Response::HTTP_ACCEPTED);
    
}

function destroy(Tessting $tessting)
{
    abort_if(Gate::denies('tessting_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




$tessting->delete();
return response(null, Response::HTTP_NO_CONTENT);
    
}


}