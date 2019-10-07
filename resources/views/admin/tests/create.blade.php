@extends('layouts.admin')
@section('content')
<div class="content">
    
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.test.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.tests.store") }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group {{ $errors->has('papai') ? 'has-error' : '' }}">
<label for="papai">{{ trans('cruds.test.fields.papai') }}</label>
<input type="text" id="papai" name="papai" class="form-control" value="{{ old('papai', isset($test) ? $test->papai : '') }}">
@if($errors->has('papai'))
                        <p class="help-block">
                            {{ $errors->first('papai') }}
                        </p>
                    @endif
<p class="helper-block">
{{ trans('cruds.test.fields.papai_helper') }}
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


