@extends('admin.layouts.app')

@section('title', 'Редактирование данных ' . $category->title)
@section('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Категори</a></li>
    <li class="breadcrumb-item active">Редактировать данные категори {{ $category->title }}</li>
@endsection


@section('mainContent')
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('admin.categories.update', $category) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="title" class="col-xs-2 control-label">Title</label>
                        <input type="text"
                               name="title"
                               id="title"
                               value="{{ old('title', $category->title) }}"
                               class="form-control"
                               placeholder="title">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <div class="col-xs-offset-2 col-xs-8">
                        <button type="submit" class="btn btn-secondary">Обновить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

