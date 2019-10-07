<?php

namespace App\Http\Requests;

use Gate;
use App\Tessting;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;


class UpdateTesstingRequest extends FormRequest  {





public function authorize()
{
    abort_if(Gate::denies('tessting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');




return true;
    
}

public function rules()
{
    



return [
];

    
}


}