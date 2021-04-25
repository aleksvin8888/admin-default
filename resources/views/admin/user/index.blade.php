@extends('admin.layouts.app')
@section('title', 'Пользователи')

@section('mainContent')
<div class="container col-lg-10 mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Пользователи</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}" title="Create a product"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-dark table-borderless">
        <tr>
            <th>##</th>
            <th>Имя</th>
            <th>Email </th>
            <th>Роль</th>
            <th>Дата регистрации</th>
            <th>Блокировка</th>
            <th>Действие</th>
        </tr>
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

                        <a href="{{ route('users.show', $user) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg ml-2"></i>
                        </a>

                        <a href="{{ route('users.edit', $user) }}">
                            <i class="fas fa-edit  fa-lg ml-2"></i>
                        </a>

                    <a data-toggle="modal" id="smallButton" data-target="#smallModal"
                       data-attr="{{ route ('delete', $user->id) }}" data-id="{{$user->id}}" title="Delete User">
                        <i class="fas fa-trash text-danger  fa-lg ml-2"></i>
                    </a>

                </td>
            </tr>
        @endforeach
    </table>

    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="justify-content-center">Удаление данных пользователя</h4>
                <button type="button" class="close" data-dismiss="modal"  aria-label="Close"  >
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


<script>


</script>
@endsection

