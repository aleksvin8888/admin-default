@extends('admin.layouts.app')
@section('title', $post->title )
@section('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">посты</a></li>
    <li class="breadcrumb-item active">Информацыя - {{ $post->title }}</li>
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
                        <td>{{ $post->id }}</td>
                    </tr>
                    <tr>
                        <td>Названия</td>
                        <td>{{ $post->title }}</td>
                    </tr>
                    <tr>
                        <td>Контент</td>
                        <td>{{ $post->content }}</td>
                    </tr>
                    <tr>
                        <td>Лайки</td>
                        <td>{{ $post->like }}</td>
                    </tr>
                    <tr>
                        <td>Категория</td>
                        <td>{{ $post->category->title }}</td>
                    </tr>
                    <tr>
                        <td>Дата создания</td>
                        <td>{{ $post->created_at }}</td>
                    </tr>
                    </tbody>
                </table>
                <div class="card-footer">
                    <div class="form-group col-lg-3">
                        <div class="col-xs-offset-2 col-xs-8">
                            <a type="button" class="btn btn-secondary"
                               href="{{ route('admin.posts.edit', $post->id) }}">Редактировать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
