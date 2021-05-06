@extends('admin.layouts.app')
@section('title', 'Пользователи')

@section('breadcrumb-item')
    <li class="breadcrumb-item active">Пользователи</li>
@endsection
@section('mainContent')
    <div class="card mb-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-header">
            <a class="btn btn-light" href="{{ route('admin.users.create') }}">
                Добавить пользователя
                <i class="fas fa-plus mr-1"></i>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" >
                    <thead>
                    <tr>
                        <th>##</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Роль</th>
                        <th>Дата регистрации</th>
                        <th>Блокировка</th>
                        <th>Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>

                            @if($user->role_id == null)
                                <td>No Group</td>
                            @else
                                <td>{{ $user->role->title }}</td>
                            @endif
                            <td>{{ $user->created_at }}</td>
                            <td>
                                @if($user->is_blocked == 0)
                                    <p>Разблокирован</p>
                                @else
                                    <p>Заблокирован</p>
                                @endif
                            </td>
                            <td>

                                <a href="{{ route('admin.users.show', $user) }}" title="show">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="{{ route('admin.users.edit', $user) }}" title="Edit User">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a data-toggle="modal" id="smallButton" data-target="#smallModal"
                                   data-attr="{{ route ('admin.users.modal.ajax.delete', $user->id) }}"
                                   data-id="{{$user->id}}"
                                   title="Delete User">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="justify-content-center">
                    <div class="row col-md-12">
                        <div class="card border-0">
                            <div class="card-body">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="justify-content-center">Удаление данных пользователя</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="smallBody">
                    <div>
                        <!-- Полученый ответ Ajax -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

