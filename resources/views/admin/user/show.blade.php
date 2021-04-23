@extends('admin.layouts.app')
@section('title')
   Данные пользователя {{ $user->name }}
@endsection

@section('mainContent')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Пользователь #{{ $user->id }} </h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Имя:</strong>
                    {{ $user->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Электронная почта:</strong>
                    {{ $user->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Блокировка:</strong>
                    @if($user->is_blocked == 0)
                        Разблокирован
                    @else
                        Заблокирован
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Дата регистрации:</strong>
                    {{ $user->created_at }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
               <a type="button" class="btn btn-outline-primary" href="{{ route('users.edit', $user->id) }}">Редактировать данные</a>
            </div>
        </div>
    </div>
@endsection
