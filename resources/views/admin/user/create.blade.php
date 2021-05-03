@extends('admin.layouts.app')

@section('title', 'Добавить пользователя')
@section('page','Добавить пользователя')
@section('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Пользователи</a></li>
    <li class="breadcrumb-item active">Добавить пользователя</li>
@endsection

@section('mainContent')
<div class="card mb-4">
    <div class="card-header">
        <div class="float-left">
            <a class="btn btn-light" href="{{ route('admin.users.index') }}" title="Go back">
                <small><i class="fas fa-backward "></i> <b>Вернуться</b></small>
            </a>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('admin.users.store') }}">
            @csrf
            <div class="form-group col-lg-12 mb-2">
                <label for="inputEmail" class="col-xs-2 control-label">Имя:</label>
                <div class="col-xs-8">
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Enter name"
                           value="{{old('name')}}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group col-lg-12 mb-2">
                <label for="inputEmail" class="col-xs-2 control-label">Электронная почта:</label>
                <div class="col-xs-8">
                    <input type="text" name="email" class="form-control" id="inputEmail"
                           placeholder="Введите электронную почту" value="{{old('email')}}">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="role_id"><strong>Роль:</strong></label>
                    <select name="role_id" id="role_id" class="form-control">
                        <option value="">Выберите роль</option>
                        @foreach($roleList as $roleOption)
                            <option value="{{ $roleOption->id }}">
                                {{ $roleOption->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('role_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group col-lg-12 mb-2">
                <label for="inputPassword" class="col-xs-2 control-label">Пароль:</label>
                <div class="col-xs-8">
                    <input type="password" name="password" class="form-control" id="inputPassword"
                           placeholder="Введите пароль">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            </div>
            <div class="card-footer">
            <div class="form-group col-lg-3">
                <div class="col-xs-offset-2 col-xs-8">
                    <button type="submit" class="btn btn-secondary">Создать</button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection

