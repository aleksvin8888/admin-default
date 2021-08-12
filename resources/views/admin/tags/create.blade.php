@extends('admin.layouts.app')

@section('title', 'Создать новый тег')
@section('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ route('admin.tags.index') }}">Теги</a></li>
    <li class="breadcrumb-item active">Создать новый тег</li>
@endsection

@section('mainContent')
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.tags.store') }}">
                @csrf
                <div class="form-group col-lg-12 mb-2">
                    <label for="title" class="col-xs-2 control-label">Названия:</label>
                    <div class="col-xs-8">
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter title"
                               value="{{old('title')}}">
                        @error('title')
                        <div class="alert alert-danger">Поле обезательно для заполнения</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group col-lg-3">
                        <div class="col-xs-offset-2 col-xs-8">
                            <button type="submit" class="btn btn-secondary">Создать</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection

