@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.test.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.tests.update", [$test->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('mew') ? 'has-error' : '' }}">
                            <label for="mew">{{ trans('cruds.test.fields.mew') }}</label>
                            <input type="text" id="mew" name="mew" class="form-control" value="{{ old('mew', isset($test) ? $test->mew : '') }}">
                            @if($errors->has('mew'))
                                <p class="help-block">
                                    {{ $errors->first('mew') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.test.fields.mew_helper') }}
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