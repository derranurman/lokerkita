@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Buat Lokasi Pekerjaan
    </div>

    <div class="card-body">
        <form action="{{ route("admin.locations.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Lokasi*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($location) ? $location->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.location.fields.name_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection