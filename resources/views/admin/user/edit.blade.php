@extends('admin.layouts.app')

@section('title', 'Редактирование данных ' . $user->name)
@section('breadcrumb-item')
    <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Пользователи</a></li>
    <li class="breadcrumb-item active">Редактировать данные пользователя {{ $user->name }}</li>
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
            <form action="{{ route('admin.users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Имя:</strong>
                        <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control"
                               placeholder="Имя">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Элктронная почта:</strong>
                        <input type="text" name="email" value="{{ old('email', $user->email) }}" class="form-control"
                               placeholder="Элктронная почта">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="role_id"><strong>Роль:</strong></label>
                        <select name="role_id"
                                id="role_id"
                                class="form-control"
                                required>
                            @foreach($roleList as $roleOption)
                                <option value="{{ $roleOption->id }}"
                                        @if($roleOption->id == $user->role_id) selected @endif>
                                    {{ $roleOption->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="is_blocked"><strong>Блокировка:</strong></label>
                        <select name="is_blocked"
                                id="is_blocked"
                                class="form-control"
                                required>
                            @if($user->is_blocked == 0)
                                <option value="{{ $user->is_blocked }}" selected> Разблокирован</option>
                                <option value="1">Заблокировать</option>
                            @else
                                <option value="{{ $user->is_blocked }}" selected> Заблокирован</option>
                                <option value="0">Разблокировать</option>
                            @endif
                        </select>
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

