@extends('layouts.admin')
@section('content')
<div class="content">
    
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.testAaaa.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.test-aaaas.update", [$testAaaa->id]) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-group {{ $errors->has('testas') ? 'has-error' : '' }}">
<label for="testas">{{ trans('cruds.testAaaa.fields.testas') }}</label>
<input type="text" id="testas" name="testas" class="form-control" value="{{ old('testas', isset($testAaaa) ? $testAaaa->testas : '') }}">
@if($errors->has('testas'))
                        <p class="help-block">
                            {{ $errors->first('testas') }}
                        </p>
                    @endif
<p class="helper-block">
{{ trans('cruds.testAaaa.fields.testas_helper') }}
</p>
</div>
<div>
<input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
</div>
</form>

                    
                </div>
            </div>

        </div>
    </div>
</div>
@endsection


