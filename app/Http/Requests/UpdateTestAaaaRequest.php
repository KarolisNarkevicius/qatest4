<?php

namespace App\Http\Requests;

use Gate;
use App\TestAaaa;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;


class UpdateTestAaaaRequest extends FormRequest  {





public function authorize()
{
    abort_if(Gate::denies('test_aaaa_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return true;
    
}

public function rules()
{
    



return [
];

    
}


}