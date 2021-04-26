@extends('admin.layouts.app')

@section('title', 'Добавить пользователя')

@section('mainContent')

<div class="container-fluid col-lg-10 mt-2">
    <div class="bg-info text-white" id="breadcrumb-user">
        <h2 class="ml-3">Новый пользователь</h2>
    </div>

    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="form-group col-lg-12 mb-2">
            <label for="inputEmail" class="col-xs-2 control-label">Имя:</label>
            <div class="col-xs-8">
                <input type="text" name="name" class="form-control" id="inputName" placeholder="Enter name"  value="{{old('name')}}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group col-lg-12 mb-2">
            <label for="inputEmail" class="col-xs-2 control-label">Электронная почта:</label>
            <div class="col-xs-8">
                <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Введите электронную почту" value="{{old('email')}}">
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
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Введите пароль">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group col-lg-3">
            <div class="float-right">
                <a class="btn btn-info" href="{{ route('users.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
            <div class="col-xs-offset-2 col-xs-8">
                <button type="submit" class="btn btn-info">Создать</button>
            </div>
        </div>
    </form>
</div>

@endsection

