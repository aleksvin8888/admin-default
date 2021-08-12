@extends('admin.layouts.app')
@section('title', $tag->title )
@section('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ route('admin.tags.index') }}">теги</a></li>
    <li class="breadcrumb-item active">Информацыя - {{ $tag->title }}</li>
@endsection
@section('mainContent')
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover col-4" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>##</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Id</td>
                        <td>{{ $tag->id }}</td>
                    </tr>
                    <tr>
                        <td>Названия</td>
                        <td>{{ $tag->title }}</td>
                    </tr>
                    <tr>
                        <td>Slug</td>
                        <td>{{ $tag->slug }}</td>
                    </tr>
                    <tr>
                        <td>Дата создания</td>
                        <td>{{ $tag->created_at }}</td>
                    </tr>
                    </tbody>
                </table>
                <div class="card-footer">
                    <div class="form-group col-lg-3">
                        <div class="col-xs-offset-2 col-xs-8">
                            <a type="button" class="btn btn-secondary"
                               href="{{ route('admin.tags.edit', $tag->id) }}">Редактировать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
