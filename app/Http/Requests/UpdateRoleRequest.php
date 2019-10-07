<?php

namespace App\Http\Requests;

use Gate;
use App\Role;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;


class UpdateRoleRequest extends FormRequest  {





public function authorize()
{
    abort_if(Gate::denies('role_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return true;
    
}

public function rules()
{
    



return [
'title' => [
    'required',
],
'permissions.*' => [
    'integer',
],
'permissions' => [
    'required',
'array',
],
];

    
}


}