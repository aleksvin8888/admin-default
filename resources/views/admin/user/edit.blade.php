@extends('admin.layouts.app')

@section('mainContent')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit User</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index', $user) }}" title="Go back"> <i class="fas fa-backward "></i> </a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" placeholder="Name">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>eMail:</strong>
                        <input type="text" name="email" value="{{ old('email', $user->email) }}" class="form-control" placeholder="eMail">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="role_id"><strong>Role:</strong></label>
                        <select name="role_id"
                                id="role_id"
                                class="form-control"
                                placeholder="Выберите роль"
                                required>
                            @foreach($roleList as $roleOption)
                                <option value="{{ $roleOption->id }}"
                                        @if($roleOption->id == $user->role_id) selected @endif>
                                    {{ $roleOption->id }}. {{ $roleOption->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="is_blocked"><strong>Blocked:</strong></label>
                        <select name="is_blocked"
                                id="is_blocked"
                                class="form-control"
                                required>
                            @if($user->is_blocked == 0)
                                <option value="{{ $user->is_blocked }}" selected> Разблокирован </option>
                                <option value="1">Заблокировать</option>
                            @else
                                <option value="{{ $user->is_blocked }}" selected> Заблокирован </option>
                                <option value="0">Разблокировать</option>
                            @endif
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>

        </form>
    </div>
@endsection

