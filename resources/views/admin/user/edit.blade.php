@extends('admin.layouts.app')
@section('title') Edit {{ $user->name }}
@endsection
@section('mainContent')
    <div class="container col-lg-10 mt-22">
        <div class="bg-info text-white" id="breadcrumb-user" style="height: 45px">
            <h2 class="ml-3">Edit User</h2>
        </div>

        @include('admin.includes.messages')

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

                <div class="form-group col-lg-3">
                    <div class="float-right">
                        <a class="btn btn-info" href="{{ route('users.index', $user) }}" title="Go back"> <i class="fas fa-backward "></i> </a>
                    </div>
                    <div class="col-xs-offset-2 col-xs-8">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection

