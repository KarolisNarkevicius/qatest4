@extends('layouts.admin')
@section('content')
<div class="content">
    
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.tessting.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.tesstings.store") }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group {{ $errors->has('testas') ? 'has-error' : '' }}">
<label for="testas">{{ trans('cruds.tessting.fields.testas') }}</label>
<input type="text" id="testas" name="testas" class="form-control" value="{{ old('testas', isset($tessting) ? $tessting->testas : '') }}">
@if($errors->has('testas'))
                        <p class="help-block">
                            {{ $errors->first('testas') }}
                        </p>
                    @endif
<p class="helper-block">
{{ trans('cruds.tessting.fields.testas_helper') }}
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


