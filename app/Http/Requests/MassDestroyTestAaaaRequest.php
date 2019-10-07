<?php

namespace App\Http\Requests;

use Gate;
use App\TestAaaa;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;


class MassDestroyTestAaaaRequest extends FormRequest  {





public function authorize()
{
    abort_if(Gate::denies('test_aaaa_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return true;
    
}

public function rules()
{
    



return [
'ids' => 'required|array',
    'ids.*' => 'exists:test_aaaas,id'
];
    
}


}