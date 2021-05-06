@extends('admin.layouts.app')
@section('title', $user->name )
@section('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Пользователи</a></li>
    <li class="breadcrumb-item active">Информацыя - {{ $user->name }}</li>
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
                        <td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <td>Имя</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td>Роль</td>
                        <td>{{ $user->role->title }}</td>
                    </tr>
                    <tr>
                        <td>Статус блокировки</td>
                        <td>@if($user->is_blocked == 0)
                                Разблокирован
                            @else
                                Заблокирован
                            @endif</td>
                    </tr>
                    <tr>
                        <td>Статус верефикацыи</td>
                        <td>@if($user->email_verified_at == null)
                                Неверифицырован
                            @else
                                Верифицирован
                            @endif</td>
                    </tr>
                    <tr>
                        <td>Дата регистрацыи</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    </tbody>
                </table>
                <div class="card-footer">
                    <div class="form-group col-lg-3">
                        <div class="col-xs-offset-2 col-xs-8">
                            <a type="button" class="btn btn-secondary"
                               href="{{ route('admin.users.edit', $user->id) }}">Редактировать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
