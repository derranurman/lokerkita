@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Tampilkan Info Pekerjaan
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.id') }}
                        </th>
                        <td>
                            {{ $job->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Judul
                        </th>
                        <td>
                            {{ $job->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Nama Perusahaan
                        </th>
                        <td>
                            {{ $job->company->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.short_description') }}
                        </th>
                        <td>
                            {{ $job->short_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.full_description') }}
                        </th>
                        <td>
                            {!! $job->full_description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Informasi Perusahaan
                        </th>
                        <td>
                            {!! $job->requirements !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Sifat Pekerjaan
                        </th>
                        <td>
                            {{ $job->job_nature }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Lokasi Pekerjaan
                        </th>
                        <td>
                            {{ $job->location->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Alamat
                        </th>
                        <td>
                            {{ $job->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kategori
                        </th>
                        <td>
                            @foreach($job->categories as $id => $categories)
                                <span class="label label-info label-many">{{ $categories->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gaji
                        </th>
                        <td>
                            {{ $job->salary }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.job.fields.top_rated') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled {{ $job->top_rated ? "checked" : "" }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
</div>
@endsection